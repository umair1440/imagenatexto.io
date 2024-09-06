<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Service\Drive as Google_Service_Drive;
use Google\Service\Drive\DriveFile as Google_Service_Drive_DriveFile;
use App\Services\GoogleService;  // This is your custom service for Google Client configuration
use Google\Service\Docs;
use Illuminate\Support\Facades\Storage;


class OcrController extends Controller
{
    public function uploadFile(Request $request)
    {
        try {
            //code...
            $client = GoogleService::getClient();
            $folderId = '1Lunz3DMf6jQiqFJH8ACBPifU7isj0Pbw';

            // // Now you can use the client to interact with the Drive API
            $driveService = new Google_Service_Drive($client);

            $fileMetadata = new Google_Service_Drive_DriveFile([
                'name' => 'myimageishere123.png',
                'mimeType' => 'application/vnd.google-apps.document' // Set mime type for Google Doc
            ]);

            $base64Image = $request->input('image'); // Get the base64 image from the request

            // Extract the actual base64 string (without the metadata)
            if (preg_match('/^data:image\/(?<type>.+);base64,(?<data>.+)$/', $base64Image, $matches)) {
                $imageType = $matches['type'];
                $imageData = base64_decode($matches['data']);

                $fileName = 'ocr.' . $imageType; // Adjust the filename as needed
                $filePath = 'public/' . $fileName;

                // Store the image in public storage
                Storage::put($filePath, $imageData);

                // Prepare file metadata for Google Drive
                $fileMetadata = new Google_Service_Drive_DriveFile([
                    'name' => 'ocr.png',
                    'mimeType' => 'application/vnd.google-apps.document', // Set mime type for Google Doc
                    'parents' => [$folderId] // Specify the folder ID where the file should be uploaded
                ]);
                // Create and upload the file to Google Drive
                $driveFile = $driveService->files->create($fileMetadata, [
                    'data' => file_get_contents(storage_path('app/' . $filePath)), // Get the full path of the stored file
                    'mimeType' => 'image/png',
                    'uploadType' => 'multipart'
                ]);

                // Delete the file from public storage after uploading
                Storage::delete($filePath);

                // dd($driveFile->id);
                info($driveFile->id);
                return $this->processOCR2($driveFile->id);
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function processOCR2($fileId)
    {
        $client = GoogleService::getClient();
        $docsService = new Docs($client);
        $document = $docsService->documents->get($fileId);
        $text = '';


        // Check the document body content
        $contentElements = $document->getBody()->getContent();
        if (empty($contentElements)) {
            return response()->json(['error' => 'Document is empty or does not contain valid content.']);
        }

        // Loop through content elements
        foreach ($contentElements as $element) {
            // Check for paragraph elements
            $paragraph = $element->getParagraph();
            if ($paragraph !== null) {
                $paragraphElements = $paragraph->getElements();
                foreach ($paragraphElements as $textElement) {
                    $textRun = $textElement->getTextRun();
                    if ($textRun !== null) {
                        $text .= $textRun->getContent();
                    }
                }
            }

            // Check for table elements
            $table = $element->getTable();
            if ($table !== null) {
                $rows = $table->getTableRows();
                foreach ($rows as $row) {
                    $cells = $row->getTableCells();
                    foreach ($cells as $cell) {
                        $cellContent = $cell->getContent();
                        foreach ($cellContent as $cellElement) {
                            $paragraph = $cellElement->getParagraph();
                            if ($paragraph !== null) {
                                $paragraphElements = $paragraph->getElements();
                                foreach ($paragraphElements as $textElement) {
                                    $textRun = $textElement->getTextRun();
                                    if ($textRun !== null) {
                                        $text .= $textRun->getContent();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        return $text;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesHandleConroller extends Controller
{
    public function generateDoc(Request $request)
    {
        $text = $request->input('text');
        $filename = "result.doc";
        file_put_contents($filename, $text);

        // Set headers to force download
        return response()->download($filename)->deleteFileAfterSend(true);
    }
}

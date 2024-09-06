<?php

namespace App\Services;

use Google\Client;
use Google\Service\Docs;
use Google\Service\Drive;
use Google\Service\Vision;

class GoogleService
{
    public static function getClient()
    {
        // $client = new Client();
        // $client->setAuthConfig(storage_path('app/credentials.json'));
        // $client->addScope(Drive::DRIVE);
        // $client->setAccessType('offline');

        // return $client;

        $client = new Client();
        $client->setAuthConfig(storage_path('app/credentials_service.json')); // Your service account JSON file path
        $client->setScopes([Drive::DRIVE]); // Specify Google Drive scope

        // Since it's a service account, we don't need to set the access type or get an authorization code.
        // The service account is automatically authenticated without user interaction.
        $client->useApplicationDefaultCredentials();
        return $client;
    }
}

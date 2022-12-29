<?php
declare(strict_types=1);


namespace App\Data\Reader;

use GuzzleHttp\Client;

class apiReader implements ContentInterface
{

    public static function getData(): array
    {
        $client = new Client();
        $json = $client->get('https://random-data-api.com//api/bank/random_bank');
        json_decode(file_get_contents($json), true);
    }
}

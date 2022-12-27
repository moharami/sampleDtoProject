<?php
declare(strict_types=1);


namespace App\Data;

use GuzzleHttp\Client;

class getContent
{

    public static function fromApi()
    {
        $client = new Client();
        return $client->get('https://random-data-api.com//api/bank/random_bank');
    }

    public static function fromJsonfile()
    {
        $filePath = app_path() . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . 'data.json';
        return json_decode(file_get_contents($filePath), true);
    }

    public static function fromXmlfile()
    {
        $filePath = app_path() . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . 'data.xml';
        $content = simplexml_load_string(file_get_contents($filePath));
        $json = json_encode($content);
        return json_decode($json, true);
    }

}

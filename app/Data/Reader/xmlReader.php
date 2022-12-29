<?php
declare(strict_types=1);


namespace App\Data\Reader;

use function app_path;

class xmlReader implements ContentInterface
{

    public static function getData(): array
    {
        $filePath = app_path() . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . 'data.xml';
        $content = simplexml_load_string(file_get_contents($filePath));
        $json = json_encode($content);
        return json_decode($json, true);
    }
}

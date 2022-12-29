<?php


namespace App\Data\Reader;


class jsonReader implements ContentInterface
{

    public static function getData(): array
    {
        $filePath = app_path() . DIRECTORY_SEPARATOR . 'Data' . DIRECTORY_SEPARATOR . 'data.json';
        return json_decode(file_get_contents($filePath), true);
    }
}

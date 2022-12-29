<?php

namespace App\Data;


class Source
{
    public static function getData($source)
    {
        $class = __NAMESPACE__ . '\\Reader\\' . $source . 'Reader';
        return $class::getData();
    }
}

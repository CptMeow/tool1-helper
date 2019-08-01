<?php
/**
 * Cat Land Soft Helper
 */
namespace CatLand\Tool1;

class CatlandHelper
{

    public static function readConfig($value, $index = null)
    {
        if (@unserialize($value)) {
            $array = unserialize($value);

            return isset($array[$index]['value']) ? $array[$index]['value'] : 'not found';
        }

        return 'error reading config';
    }

    public static function dummyRadar($limit = 30, $min = 0, $max = 5)
    {
        for ($i = 0; $i < $limit; $i++) {
            $a[] = rand($min, $max);
        }

        return implode(",", $a);
    }

}

<?php

namespace App\Core;

use FFI\Exception;

class App
{
    protected static $items = [];

    public static function bind($key, $value)
    {
        static::$items[$key] = $value;
    }

    public static function get($key)
    {
        if (!array_key_exists($key, static::$items)) {
            throw new Exception("No dependency with name $key bound");
        }

        return static::$items[$key];
    }
}

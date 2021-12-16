<?php

namespace Taymaz\Scode;

use Taymaz\Scode\codeGenerator as CG;
use Taymaz\Scode\DataMan as DM;

class Scode
{
    private static $size = 4;
    private static $type = null;
    private static $prefix = null;

    public static function pinCode()
    {
        self::$type = 'pin';
        return new static;
    }
    public static function textCode()
    {
        self::$type = 'text';
        return new static;
    }
    public static function size(int $size)
    {
        self::$size = $size;
        return new static;
    }
    public static function apply()
    {
        return CG::generate(new DM(
            [
                'size' => self::$size,
                'type' => self::$type,
                'prefix' => self::$prefix,
            ]
        ));
    }
}

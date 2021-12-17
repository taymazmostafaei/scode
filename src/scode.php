<?php

namespace Taymaz\Scode;

use Taymaz\Scode\codeGenerator as CG;
use Taymaz\Scode\DataMan as DM;


/**
 * get security code too easy by 1 line coding
 * 
 * we just to try make your work easy 
 * 
 * @package    Scode
 * @subpackage Taymaz
 * @author     Taymaz mostafaei <taymazmostafaei3@gmail.com>
 */

class Scode
{
    private static $size = 4;
    private static $type = null;
    private static $prefix = null;

    /**
     * 
     * choosing pin code mode 
     * like : 3216
     *
     * @return void
     */

    public static function pinCode()
    {
        self::$type = 'pin';
        return new static;
    }

    /**
     * 
     * choosing text code mode 
     * like : ktrj
     *
     * @return void
     */

    public static function textCode()
    {
        self::$type = 'text';
        return new static;
    }

    /**
     * 
     * adding prefix to your text or pin code
     * like : TM1230 , TMopiu
     * 
     * @return void
     */

    public static function prefix(string $prefix)
    {
        self::$prefix = $prefix;
        return new static;
    }

    /**
     * 
     * set size of code for example 4 or 6 sizes
     * like : 4 => 1236 or tkjh  , 6 => 8467303 or rqloie
     * 
     * @param string $size  give number 1 up to 8 in pin code and give number 1 up to 25
     * @return void
     */

    public static function size(int $size)
    {
        self::$size = $size;
        return new static;
    }

    /**
     * 
     * apply settings you set to get generated code
     * 
     * @return string returns code to you
     */

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

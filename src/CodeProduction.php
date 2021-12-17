<?php

namespace Taymaz\Scode;

/**
 * generate text , pin code class
 * 
 * @package    Scode
 * @subpackage Taymaz
 * @author     Taymaz mostafaei <taymazmostafaei3@gmail.com>
 */

class CodeProduction {
    public static function pin(){
        $pin = rand(10101010, 90000000) + rand(10101010, rand(10101010, 90000000))  + rand(10101010, 90000000) * 2 * 3;
        return $pin;
    }
    public static function text(){
        $text = str_shuffle('zaqxswcdevfrbgtnhymjukilop');
        return $text;
    }
}
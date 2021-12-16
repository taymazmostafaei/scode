<?php

namespace Taymaz\Scode;

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
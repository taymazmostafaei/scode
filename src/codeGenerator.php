<?php

namespace Taymaz\Scode;

/**
 * Code generation management
 * 
 * @package    Scode
 * @subpackage Taymaz
 * @author     Taymaz mostafaei <taymazmostafaei3@gmail.com>
 */

class codeGenerator
{
    public static function generate(DataMan $DataMan)
    {
        $DataMan->ManuFactureCode();
        $DataMan->ResizeCode();
        $DataMan->PrefixCode();
        $code = $DataMan->ReturnFinalCode();
        return $code;
    }
}

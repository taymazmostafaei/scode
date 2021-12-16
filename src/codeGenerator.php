<?php

namespace Taymaz\Scode;

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

<?php

namespace Taymaz\Scode;

use Taymaz\Scode\CodeProduction;

class DataMan
{
    private $data;
    private $code;
    function __construct(array $data)
    {
        $this->data = $data;
    }
    public function ManuFactureCode()
    {
        $flag = $this->data['type'];
        $FacturedCode = CodeProduction::$flag();
        $this->code = $FacturedCode;
    }
    public function ResizeCode()
    {
        $size = $this->data['size'];
        $code = (string)$this->code;
        $ResizedCode = substr($code, 0, $size);
        $this->code = $ResizedCode;
    }
    public function PrefixCode()
    {
        $prefix = $this->data['prefix'];
        $code = $this->code;
        $PrefixedCode = $prefix ? $prefix . $code : $code;
        $this->code = $PrefixedCode;
    }
    public function ReturnFinalCode()
    {
        return $this->code;
    }
}

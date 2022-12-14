<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Taymaz\Scode\CodeProduction;

class CodeProductionTest extends TestCase
{
    public function testPin()
    {
        if (is_int(CodeProduction::pin())) {
            $this->assertTrue(true);
        }

        $this->assertEquals(9, strlen((string)CodeProduction::pin()), 'output:' . CodeProduction::pin());

        return;
    }

    public function testText(){
        if (is_int(CodeProduction::text())) {
            $this->assertTrue(true);
        }

        $this->assertEquals(26, strlen((string)CodeProduction::text()), 'output:' . strlen((string)CodeProduction::text()));

        return;
    }
}

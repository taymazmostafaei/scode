<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
use Taymaz\Scode\Scode;

class ScodeTest extends TestCase {
    public function testPincode(){
        $result = Scode::pinCode()->apply();

        $this->assertIsInt($result * 1);
        return; 
    }

    public function testTextCode(){
        $result = Scode::textCode()->apply();

        $this->assertIsString($result);
        return; 
    }

    public function testTextCodePrefix(){
        $result = Scode::textCode()->prefix('test')->apply();
        $this->assertEquals('test', substr($result, 0,4));
        return;
    }

    public function testPincodeCodePrefix(){
        $result = Scode::pinCode()->prefix('test')->apply();
        $this->assertEquals('test', substr($result, 0,4));
        return;
    }
}
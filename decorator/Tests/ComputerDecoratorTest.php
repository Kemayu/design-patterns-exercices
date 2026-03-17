<?php

namespace Test;

use PHPUnit\Framework\TestCase;

use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }


    public function testLaptopWithGPU()
    {
        $laptop = new \App\Laptop();
        $gpuLaptop = new \App\GPU($laptop);
        $this->assertSame(600, $gpuLaptop->getPrice());
        $this->assertSame("A laptop computer with GPU", $gpuLaptop->getDescription());
    }


    public function testLaptopWithOLEDScreen()
    {
        $laptop = new \App\Laptop();
        $oledLaptop = new \App\OLEDScreen($laptop);
        $this->assertSame(550, $oledLaptop->getPrice());
        $this->assertSame("A laptop computer with OLED screen", $oledLaptop->getDescription());
    }
}
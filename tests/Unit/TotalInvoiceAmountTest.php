<?php

use PHPUnit\Framework\TestCase;


class FirstTest extends TestCase {

    public function testTotalInvoiceAmount()
    {

        
        $a=100; //price of the first product
        $b=4; //quantity of the first product
        $c=200; //price of the second product
        $d=5; // quantity of the seconf product
        $e= $a*$b + $c*$d;
        $this->assertEquals($e,1400);

    }
}
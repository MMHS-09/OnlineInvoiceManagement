<?php

namespace Tests\Unit;
use Tests\TestCase;

class SubtractionTest extends TestCase {

    public function test_divides_given_operands() {

        $sub = new \App\Calculator\Subtraction;
        $sub->setOperands([100, 50]);

        $this->assertEquals(50, $sub->calculate());
    }

    // public function test_no_operands_given_throws_exception_when_calculating() {

    //     $this->expectException(\App\Calculator\Exceptions\NoOperandsException::class);

    //     $addition = new \App\Calculator\Addition;
    //     $addition->calculate();

    // }
}
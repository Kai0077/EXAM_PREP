<?php

use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd($a, $b) {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->add(2,2));
    }
}
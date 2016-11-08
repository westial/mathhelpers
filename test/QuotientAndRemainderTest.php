<?php

namespace Tests\MathHelpers;


use MathHelpers\QuotientAndRemainder;

class QuotientAndRemainderTest extends \PHPUnit_Framework_TestCase
{
    private $samples = [
        [6, 3, 2, 0],
        [7, 3, 2, 1],
        [8, 3, 2, 2],
        [777772, 13, 59828, 8],
        [45625, 7, 6517, 6],
        [777772.5, 13, 59828.0, 8.5]
    ];

    public function testQuotientAndRemainder()
    {
        foreach ($this->samples as $sample)
        {
            list($divisor, $dividend, $quotient, $remainder) = $sample;
            $calculator = new QuotientAndRemainder($divisor, $dividend);
            list($resultQuotient, $resultRemainder) = $calculator();
            $this->assertEquals($quotient, $resultQuotient, "Quotient");
            $this->assertEquals($remainder, $resultRemainder, "Remainder");
        }
    }
}
<?php

namespace Tests\MathHelpers;


use MathHelpers\Percent;

class TestPercent extends \PHPUnit_Framework_TestCase
{
    private $samples = [
        [100, 5, 5],
        [200, 4.5, 9],
        [500, 10, 50]
    ];

    public function testPercent()
    {
        foreach ($this->samples as $sample)
        {
            list($value, $percent, $expected) = $sample;
            $calculator = new Percent($value, $percent);
            $result = $calculator();
            $this->assertEquals($expected, $result, "Percent");
        }
    }
}
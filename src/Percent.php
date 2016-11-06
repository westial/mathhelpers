<?php

namespace MathHelpers;


class Percent
{
    private $value;
    private $percent;

    function __construct($value, $percent)
    {
        $this->value = $value;
        $this->percent = $percent;
    }

    function __invoke()
    {
        return $this->value * $this->percent / 100;
    }
}
<?php

namespace MathHelpers;


class QuotientAndRemainder
{
    private $divisor;
    private $dividend;

    function __construct($divisor, $dividend)
    {
        $this->divisor = $divisor;
        $this->dividend = $dividend;
    }

    /**
     * Return quotient and remainder for the contextual divisor and dividend
     * integers.
     *
     * @return array
     */
    function __invoke()
    {
        $quotient = floor($this->divisor / $this->dividend);
        $remainder = fmod($this->divisor, $this->dividend);

        return array($quotient, $remainder);
    }
}
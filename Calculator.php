<?php

class Calculator
{
    private float $a;
    private float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function sumNumbers(): float
    {
        return $this->a + $this->b;
    }

    public function subtractNumbers(): float
    {
        return $this->a - $this->b;
    }

    public function multiplyNumbers(): float
    {
        return $this->a * $this->b;
    }

    public function divideNumbers(): float
    {
        return $this->a / $this->b;
    }
}
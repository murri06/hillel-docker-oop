<?php

class Calculator
{
    public function __construct(private float $a, private float $b)
    {
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

    public function divideNumbers(): float|string
    {
        if ($this->b != 0) {
            return $this->a / $this->b;
        }
        return "Помилка: ділення на нуль";
    }
}
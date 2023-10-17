<?php

class Calculator
{
    public function sumNumbers(float $A, float $B): float
    {
        return $A + $B;
    }

    public function substractNumbers(float $A, float $B): float
    {
        return $A - $B;
    }

    public function multiplyNumbers(float $A, float $B): float
    {
        return $A * $B;
    }

    public function divideNumbers(float $A, float $B): float
    {
        return $A / $B;
    }
}
<?php

require_once 'Calculator.php';

$a1 = 7.5;
$a2 = 2;
$b1 = 10;
$b2 = 2.5;
$exc = 0;

$calc1 = new Calculator($a1, $a2);
$calc2 = new Calculator( $b1, $b2);
$calc3 = new Calculator( $a1, $exc);

echo "Додавання чисел $a1 та $a2: " . $calc1->sumNumbers() . PHP_EOL;
echo "Віднімання чисел $b1 та $b2: " . $calc2->subtractNumbers() . PHP_EOL;
echo "Множення чисел $a1 та $a2: " . $calc1->multiplyNumbers() . PHP_EOL;
echo "Ділення чисел $b1 та $b2: " . $calc2->divideNumbers() . PHP_EOL;
echo "Ділення чисел $a1 та $exc: " . $calc3->divideNumbers() . PHP_EOL;
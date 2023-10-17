<?php

require_once 'Calculator.php';

$calc1 = new Calculator(7.5, 2);
$calc2 = new Calculator( 10, 2.5);

echo "Додавання чисел 7.5 та 2: " . $calc1->sumNumbers() . PHP_EOL;
echo "Віднімання чисел 10 та 2.5: " . $calc2->subtractNumbers() . PHP_EOL;
echo "Множення чисел 7.5 та 2: " . $calc1->multiplyNumbers() . PHP_EOL;
echo "Ділення чисел 10 та 2.5: " . $calc2->divideNumbers() . PHP_EOL;
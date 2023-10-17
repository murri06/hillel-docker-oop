<?php

require_once 'Calculator.php';

$calc = new Calculator();

echo "Додавання чисел 1 та 2.6: " . $calc->sumNumbers(1, 2.6) . PHP_EOL;
echo "Віднімання чисел 5 та 3.1: " . $calc->substractNumbers(5, 3.1) . PHP_EOL;
echo "Множення чисел 5 та 2: " . $calc->multiplyNumbers(5, 2) . PHP_EOL;
echo "Ділення чисел 10 та 2.5: " . $calc->divideNumbers(10, 2.5) . PHP_EOL;
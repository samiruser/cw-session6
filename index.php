<?php
include 'calculator.php';

$calculator_object = new Calculator();
$a = 10;
$b = 30;
$c = $calculator_object->sum($a, $b);

// $x = 100;
// $y = 40;
// $z = $calculator_object->sub($x, $y);
// $calculator_object->subtract(100, 40); // I can't do this because the function is protected

$scientific_object = new ScientificCalculator();

$num1 = 300;
$num2 = 400;

$result = $scientific_object->sum($num1, $num2);

echo 'Result: '. $result;

$scientific_object->demo();


$calculator_object->show_message();

$scientific_object->show_message();


// $calculator_object->model = '2015';

$calculator_object->show_model();

$scientific_object->show_model();


Calculator::printer();
ScientificCalculator::printer();
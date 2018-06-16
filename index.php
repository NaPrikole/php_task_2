<?php
include 'config.php';
include 'libs/calculator.php';

$calculator = new Calculator();
$calculator->setParamOne(77);
$calculator->setParamTwo(10);
$paramOne = $calculator->getParamOne();
$paramTwo = $calculator->getParamTwo();
$summa = $calculator->summa($paramOne, $paramTwo);
$subtraction = $calculator->subtraction($paramOne, $paramTwo);
$multiplication = $calculator->multiplication($paramOne, $paramTwo);
$division = $calculator->division($paramOne, $paramTwo);
$square = $calculator->square($paramOne);
$result = $calculator->multiplication($c, $d);
$percents = $calculator->percentage($paramOne, $paramTwo);
$calculator->setMemory($multiplication);
$memory = $calculator->getMemory();
$calculator->setParamOne($memory);
$calculator->setParamTwo(100);
$paramFour = $calculator->getParamOne();
$paramFive = $calculator->getParamTwo();
$result = $calculator->multiplication($paramFour, $paramFive);

include 'tmpl/template.php';
?>

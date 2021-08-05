<?php

require_once "classes.php";

$number = $_POST["number"];
$operator = $_POST["operator"];

$calculator = new Calculator();

$calculator->calculate($number, $operator);

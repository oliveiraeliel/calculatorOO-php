<?php
require_once 'classes/Calculator.php';
require_once 'classes/OperatorInterface.php';
require_once 'classes/Adder.php';
require_once 'classes/Subtractor.php';
require_once 'classes/Multiplier.php';
require_once 'classes/Divider.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$c = new Calculator();

switch ($operator) {
    case "+":
        $c->setOperation(new Adder);
        $c->calculate($num1, $num2);
        break;
    case "-":
        $c->setOperation(new Subtractor);
        $c->calculate($num1, $num2);
        break;
    case "*":
        $c->setOperation(new Multiplier);
        $c->calculate($num1, $num2);
        break;
    case "/":
        $c->setOperation(new Divider);
        $c->calculate($num1, $num2);
        break;
    default:
        echo "asdfsahksdahyfuisdaufsaduifhd";
}
echo $c->getResult();









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="index.php">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="text" name="operator">
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>
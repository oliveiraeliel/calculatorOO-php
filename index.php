<?php
require_once 'classes/Calculator.php';

if (isset($_POST["submit"])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $c = new Calculadora();

    switch ($operator) {
        case "+":
            $c->Somar($num1, $num2);
            $c->GetResultado();
            break;
        case "-":
            $c->Subtrair($num1, $num2);
            $c->GetResultado();
            break;
        case "*":
            $c->Multiplicar($num1, $num2);
            $c->GetResultado();
            break;
        case "/":
            $c->Dividir($num1, $num2);
            $c->GetResultado();
            break;
        case "%";
            $c->CalcularPorcentagem($num1, $num2);
            $c->GetResultado();
            break;
        case "^";
            $c->CalcularPotencia($num1, $num2);
            $c->GetResultado();
            break;
        default:
            break;
    }
}





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
        <input type="text" name="num1">
        <select name="operator" id="operator">
            <option value=""></option>
            <option value="*">*</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="^">Elevado à</option>
            <option value="%">Porcento de</option>
        </select>
        <input type="text" name="num2">
        <input type="submit" name="submit" value="submit">
    </form>

</body>

</html>
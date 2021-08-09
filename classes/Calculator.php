<?php

require "Calculo.php";

class Calculadora extends Calculo
{
    public function __construct()
    {
        $this->resultado = 0;
    }

    public function Somar($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = $this->num1 + $this->num2;
    }
    public function Subtrair($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = $this->num1 - $this->num2;
    }
    public function Dividir($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = $this->num1 / $this->num2;
    }
    public function Multiplicar($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = $this->num1 * $this->num2;
    }
    public function CalcularPorcentagem($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = ($this->num1 /100) * $this->num2;

    }
    public function CalcularPotencia($n1, $n2){
        $this->num1 = $n1;
        $this->num2 = $n2;
        $this->resultado = pow($this->num1, $this->num2);
    }


    public function showResults()
    {
        echo $this->resultado;
    }
}

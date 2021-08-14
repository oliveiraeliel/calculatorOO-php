<?php

require_once 'Calculo.php';

class Calculadora extends Calculo
{
    public function Somar($n1, $n2)
    {
        $this->resultado = $n1 + $n2;
    }
    
    public function Subtrair($n1, $n2)
    {
        $this->resultado = $n1 - $n2;
    }
    public function Dividir($n1, $n2)
    {
        $this->resultado = $n1 / $n2;
    }
    public function Multiplicar($n1, $n2)
    {

        $this->resultado =  $n1 * $n2;
    }
    public function CalcularPorcentagem($n1, $n2)
    {
        $this->resultado = ($n1 / 100) * $n2;

    }
    public function CalcularPotencia($n1, $n2)
    {
        $this->resultado = pow($n1, $n2);
    }

    public function GetResultado()
    {
        echo $this->resultado;
    }
}

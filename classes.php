<?php

class Calculator
{
    public $number;
    public $operator;
    // public $currentExpression;
    public $currentValue;

    public function calculate($num, $op)
    {
        $number = $this->number = $num;
        $operator = $this->operator = $op;
        // $currentExpression = $this->currentExpression;
        // $currentExpression = $currentExpression +
        $currentValue = $this->currentValue;
        $currentValue = $number + $operator;
        echo $currentValue;
    }
}

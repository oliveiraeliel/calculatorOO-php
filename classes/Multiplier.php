<?php

class Multiplier implements OperatorInterface
{
    public function run($number, $result)
    {
        if ($result == 0) {
            $result = 1;
        }
        return $result * $number;
    }
}

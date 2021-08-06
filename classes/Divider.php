<?php

class Divider implements OperatorInterface
{
    public function run($number, $result)
    {
        if ($result == 0) {
            $result = 1;
        }
        return  $number / $result;
    }
}

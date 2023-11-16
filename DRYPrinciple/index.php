<?php

function calculateSum($a, $b) {
    return $b + $a;
}

echo calculateSum(5, 5);

class Calculator {
    public function add($a, $b)
    {
        return $a + $b;
    }
}

$calculator = new Calculator();
echo  $calculator->add(2,3);
<?php
(int)$num1 = rand(1, 100); 
(int)$num2 = rand(1, 100);

function findRemainder($num, $devisor)
{
    $remainder = ($num - $devisor * (int)($num / $devisor)); 
    return $remainder;
}

echo findRemainder($num1, $num2);

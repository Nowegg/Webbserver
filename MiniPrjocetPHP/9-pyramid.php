<?php
function pyramid($n)
{
    $k = $n * 2;

    for ($i = 0; $i < $n; $i++){

        for ($j = 0; $j < $k; $j++){
            echo " ";
        }
        $k -= 1;
        $new = $i * 2 + 1;
        for ($j = 0; $j < $new; $j++ ){
            echo "#";
        }
        echo "\n";
    }
}

$n = 10; 
pyramid($n);

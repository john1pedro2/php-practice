<?php

$matrix = array (
    array(1, 2, 3, 4, 5),
    array(2, 3, 4, 5, 6),
    array(3, 4, 5, 6, 7),
    array(4, 5, 6, 7, 8),
    array(5, 6, 7, 8, 9)
);

echo "Diagonal principal abaixo: \n";

for ($i = 0; $i < 5; $i++ ){
    for ($j = 0; $j < 5; $j++ ){
        if ($i == $j){
            echo $matrix[$i][$j] . "\n";
        }
    }
}



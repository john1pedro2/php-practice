<?php

echo "Informe um número: ";
$number = readline();
$a = 1;

for ($i = 0; $i<$number; $i++) {

    $result =  $i+1;
    $a *= $result;
    echo "$result ";

}

echo "\nO produto e: {$a}";
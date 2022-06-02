<?php

$array = [];
$positiveNumbers = 0;
$negativeCount = 0;

for ($i = 0; $i < 20; $i++){
    echo "Informe um número: ";
    $array[$i] = readline();
    if ($array[$i] > 0){
        $positiveNumbers = $positiveNumbers + $array[$i];
    } else{
        $negativeCount++;
    }
}

echo "A soma dos positivos é: {$positiveNumbers}\n";
echo "A qnt de números negativos é: {$negativeCount}\n";

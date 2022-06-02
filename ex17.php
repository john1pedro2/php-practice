<?php

$vector = [];

for ($i = 0; $i < 20; $i++){
    echo "Informe um número inteiro: ";
    $vector[$i] = readline();
}

$higherNumber = 0;
$lowestNumber = 100000;

for ($i = 0; $i < 20; $i++){
    if ($vector[$i] > $higherNumber){
        $higherNumber = $vector[$i];
    } if ($vector[$i] < $lowestNumber){
        $lowestNumber = $vector[$i];
    }
}

echo "Maior número: {$higherNumber}\nMenor número: {$lowestNumber}\n";

$evenNumberPercentageCount = 0;

for ($i = 0; $i < 20; $i++){
    if ($vector[$i]%2 == 0){
        $evenNumberPercentageCount++;
    }
}

$evenNumberPercentage = (100*$evenNumberPercentageCount)/20;

echo "A porcentagem de números pares ne vetor é {$evenNumberPercentage}%\n";

$averageVectorNumbers = 0;

for ($i = 0; $i < 20; $i++){
    $averageVectorNumbers += $vector[$i];
}

$averageVectorNumbers = $averageVectorNumbers/20;

echo "A média dos elementos do vetor é: {$averageVectorNumbers}\n";

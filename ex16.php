<?php

$vector = [];

for ($i = 0; $i < 15; $i++){
    echo "Informe um número inteiro: ";
    $vector[$i] = readline();
}

for ($i = 0; $i < 15; $i++){
    if ($vector[$i]%2 == 0){
        echo "{$vector[$i]} PAR\n";
    } else {
        echo "{$vector[$i]} IMPAR\n";
    }
}

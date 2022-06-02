<?php

$numberInterval = 0;

do{
    echo "Informe um número inteiro diferente de 0: ";
    $number = readline();
    if ($number > 100 && $number < 200){
        $numberInterval++;
    }

} while ($number != 0);

echo "Números dentro do intervalo > 100 e < 200: {$numberInterval}";

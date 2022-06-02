<?php

echo "Informe a massa do material radioativo: ";
$mass = readline();
$seconds = 0;

do{

    $mass = $mass * 0.75;
    $seconds++;
    $mass = number_format($mass, 2, '.', '');
    echo "$mass\n";

} while ($mass >= 0.10);

echo "A quantidade de segundos necessário são: " . $seconds*30 . "s";

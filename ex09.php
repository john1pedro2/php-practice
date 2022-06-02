<?php

echo "Quantas vezes quer imprimir a palavra Sol: ";
$number = readline();

for ($i = 0; $i < $number; $i++){
    echo $i+1 . " - Sol\n";
}
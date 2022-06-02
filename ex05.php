<?php

echo "Informe o 1º lado do traingulo: ";
$side1 = readline();
echo "Informe o 2º lado do traingulo: ";
$side2 = readline();
echo "Informe o 3º lado do traingulo: ";
$side3 = readline();

if ($side1 == $side2 && $side1 == $side3){
    echo "Triangulo equilatero";
} elseif (($side1 == $side2 && $side1 !== $side3) || ($side1 !== $side2 && $side1 == $side3)){
    echo "Triângulo isósceles";
} else {
    echo "Triangulo escaleno";
}


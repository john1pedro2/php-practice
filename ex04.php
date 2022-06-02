<?php

echo "Informe um número: ";
$num1 = readline();
echo "Informe um número: ";
$num2 = readline();
echo "Informe um número: ";
$num3 = readline();

if ($num1 > $num2 && $num1 > $num3){
    if ($num2 > $num3){
        echo "{$num1}, {$num2}, {$num3} ";
    } else {
        echo "{$num1}, {$num3}, {$num2} ";
    }
} if ($num2 > $num1 && $num2 > $num3){
    if ($num1 > $num3){
        echo "{$num2}, {$num1}, {$num3} ";
    } else {
        echo "{$num2}, {$num3}, {$num1} ";
    }
} if ($num3 > $num1 && $num3 > $num2){
    if ($num1 > $num2){
        echo "{$num3}, {$num1}, {$num2} ";
    } else {
        echo "{$num3}, {$num2}, {$num1} ";
    }
}
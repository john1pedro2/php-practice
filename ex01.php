<?php

echo "Digite 1º número: ";
$num1 = readline();
echo "Digite 2º número: ";
$num2 = readline();

if (($num1+$num2) > 20){
    $res = $num1 + $num2 + 8;
} else {
    $res = $num1 + $num2 - 5;
}

echo "{$res}";




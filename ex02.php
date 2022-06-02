<?php

echo "Informe um número: ";
$num = readline();

if (($num % 10) == 0){
    echo "Divisivel por 10";
} elseif (($num % 5) == 0){
    echo "Divisivel por 5";
} elseif (($num % 2) == 0){
    echo "Divisivel por 2";
} else {
    echo "Esse número não é divisivel por 10, 5 ou 2";
}

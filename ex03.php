<?php

echo "Infome o nome: ";
$name = readline();
echo "Selecione o sexo:\n
      1 - Masculino\n
      2 - Feminino\n";
$gender = readline();

switch ($gender) {
    case 1:
        $gender = "m";
        break;
    case 2:
        $gender = "f";
        break;
}

echo "Informe idade: ";
$age = readline();

if ($gender="f" && $age < 25){
    echo "{$name} ACEITA";
} else {
    echo "NÃO ACEITA";
}


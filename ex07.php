<?php

echo "Infome o nome do livro: ";
$bookName = readline();
echo "Informe o usuário que deseja o livro:\n
      1 - Professor\n
      2 - Estudante\n";
$userType = readline();

switch ($userType) {
    case 1:
        $userType = "Professor";
        break;
    case 2:
        $userType = "Estudante";
        break;
}

if ($userType == "Professor"){
    echo "Considerar que o {$userType} tem 10 dias para a devolução do livro {$bookName}";
} else {
    echo "Considerar que o {$userType} tem 3 dias para a devolução do livro {$bookName}";
}
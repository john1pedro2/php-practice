<?php
$chicoHeight = 1.50;
$jucaHeight = 1.10;
$yearCount = 0;

do{
    $chicoHeight += 0.02;
    $jucaHeight += 0.03;
    $yearCount++;
} while($jucaHeight <= @$chicoHeight);

echo "É necessário {$yearCount} anos para Juca ser maior que Chico\n";
echo "Altura Chico: {$chicoHeight}\n";
echo "Altura Juca: {$jucaHeight}";

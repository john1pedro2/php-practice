<?php

$vector1 = [1, 2, 3, 4, 5, 7, 9, 10, 11, 12];
$vector2 = [1, 3, 4, 5, 6, 7, 8, 9, 11, 14];
$notCommonsNumber = [];


sort($vector1);
sort($vector2);

$notCommonsNumber = array_diff($vector1, $vector2);
$array = array_diff($vector2, $vector1);
$notCommonsNumber = array_merge($notCommonsNumber, $array);

sort($notCommonsNumber);
print_r($notCommonsNumber);
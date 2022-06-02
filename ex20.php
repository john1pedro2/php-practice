<?php

$matrix = array (
    array(1, 2, 3, 4, 5),
    array(2, 3, 4, 5, 6),
    array(3, 4, 5, 6, 7),
    array(4, 5, 6, 7, 8),
    array(5, 6, 7, 8, 9)
);

print_r($matrix);
echo "-------------------------------\n";

$oddMatrix = $matrix;
for ($i = 0; $i < 5; $i++ ){
    for ($j = 0; $j < 5; $j++ ){
        if (($oddMatrix[$i][$j])%2 == 0)
            unset($oddMatrix[$i][$j]);
    }
}

print_r($oddMatrix);
echo "-------------------------------\n";

$evenMatrix = $matrix;
for ($i = 0; $i < 5; $i++ ){
    for ($j = 0; $j < 5; $j++ ){
        if (($evenMatrix[$i][$j])%2 !== 0)
            unset($evenMatrix[$i][$j]);
    }
}
print_r($evenMatrix);

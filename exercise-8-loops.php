<?php

$min = intval(readline("Min? "));
$max = intval(readline("Max? "));


/*for ($i = $min; $i <= $max; $i++){
    for ($ix = $min; $ix <= $max; $ix++){

        echo $ix;
    }

    $min++;
    echo PHP_EOL;
}*/

$i = $min;

while ($i <= $max){
    for ($ix = $i; $ix <= $max; $ix++){
        echo $ix;
    }
    for ($z = 0; $z < $i - $min; $z++){
        echo ($z + $min);
    }
    echo PHP_EOL;
    $i++;
}


<?php

$desiredSum = intval(readline("Enter the desired sum between 2 and 12: "));
$actualSum = 0;
echo "Desired sum: $desiredSum" . PHP_EOL;
while ($desiredSum != $actualSum){
    $sumOne = rand(1, 6);
    $sumTwo = rand(1, 6);
    $actualSum = $sumOne + $sumTwo;

    echo "$sumOne and $sumTwo = $actualSum" . PHP_EOL;
}


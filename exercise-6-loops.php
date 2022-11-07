<?php


$rowCount = intval(readline("Provide size: "));
$starAmount = 8;
$rowSize = $starAmount * ($rowCount - 1);
$symbolProportion = 2;
$star = "*";
$backslash = "\\";
$frontslash = "/";

for ($i = 1; $i <= $rowCount; $i++){
    if ($i === 1){
        echo str_repeat($frontslash,($rowSize / $symbolProportion)) . str_repeat($backslash, $rowSize / $symbolProportion);
    } else if ($i === $rowCount){
        echo str_repeat($star, $rowSize);
    } else {
        // echo str_repeat($frontslash, ($rowSize - $starAmount) / $symbolProportion) . str_repeat($star, $starAmount) . str_repeat($backslash, ($rowSize - $starAmount) / $symbolProportion);
        for ($ix = 0; $ix < $rowSize; $ix++){
            $min = ($rowSize - $starAmount) / $symbolProportion;
            $max = $rowSize - (($rowSize - $starAmount) / $symbolProportion);
            if ($min <= $ix && $ix < $max){
                echo "*";

            } else {
                echo $ix < $rowSize / 2 ? "/" : "\\";
            }
        }
        $starAmount += 8;
    }


    echo PHP_EOL;
}
<?php

$maxValue = readline("Enter max value: ");

for ($i = 1; $i <= $maxValue; $i++){
    if ($i % 3 === 0 && $i % 5 === 0){
        echo "FizzBuzz" . " ";
    } elseif ($i % 5 === 0){
        echo "Buzz" . " ";
    } elseif ($i % 3 === 0) {
        echo "Fizz" . " ";
    } else {
        echo $i . " ";
    }
    if ($i % 20 === 0){
        echo PHP_EOL;
    }
}
<?php

[$firstWord, $secondWord] = explode(" ", readline("Enter two words separated by single space: "));
$dotLength = 30;
echo $firstWord;
for ($i = 0; $i < $dotLength; $i++){
    echo ".";
}
echo $secondWord;
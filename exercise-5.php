<?php

$randNumberToGuess = rand(1,100);

echo "I'm thinking of a number between 1-100.  Try to guess it.".PHP_EOL;

$userGuess = intval(readline(">"));

if ($randNumberToGuess === $userGuess){
    echo "You guessed it!  What are the odds?!?";
} else if ($randNumberToGuess > $userGuess){
    echo "Sorry, you are too low.  I was thinking of $randNumberToGuess.";
} else if ($randNumberToGuess < $userGuess){
    echo "Sorry, you are too high.  I was thinking of 51.";
}

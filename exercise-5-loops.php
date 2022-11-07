<?php

/*Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
The player's goal is to accumulate as many points as possible without rolling a 1.
Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
Otherwise, they add this number to their running total score.
The player then chooses whether to roll again, or end the game with their current point total.
Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:



Welcome to Piglet!
You rolled a 5!
Roll again? yes
    You rolled a 4!
Roll again? yes
    You rolled a 1!
You got 0 points.*/

$piglet = 0;
echo "Welcome to Piglet!" . PHP_EOL;
$score = 0;
while(true){
    $piglet = rand(1,6);
    $score += $piglet;
    echo "You rolled a " . $piglet . PHP_EOL;
    if ($piglet === 1){
        break;
    }
    $userInput = readline("Continue? Yes or No: ");
    if ($userInput === "No"){
        echo "You got $score points.";
        exit;
    }
}

$score = 0;

echo "You got $score points.";





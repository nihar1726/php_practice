<?php

$min = 1;
$max = 50;
$num = rand($min, $max);
$guess = 16;

if ($guess < $min || $guess > $max) {
    echo "Your guess is out of range.";
} elseif ($guess < $num) {
    echo "Your guess is too low.";
} elseif ($guess > $num) {
    echo "Your guess is too high.";
} else {
    echo "Congratulations! You guessed the number!";
}



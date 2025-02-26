<?php

$min = 1;
$max = 50;
$num = /*rand($min, $max);*/ 48;
$guess = 48;

// if ($guess < $min || $guess > $max) {
//     echo "Your guess is out of range.";
// } elseif ($guess < $num) {
//     echo "Your guess is too low.";
// } elseif ($guess > $num) {
//     echo "Your guess is too high.";
// } else {
//     echo "Congratulations! You guessed the number!";
// }

if ($guess < $min || $guess > $max)
{
    echo "<p>Your guess is out of range.</p>";
}
else {
    if($guess == $num)
    {
        echo "<p>Congratulations! You guessed the number!</p>";
    }
    else
    {
        if($guess < $num)
        {
            echo "<p>Your guess is too low.</p>";
        }
        else
        {
            echo "<p>Your guess is too high.</p>";
        }
    }
}


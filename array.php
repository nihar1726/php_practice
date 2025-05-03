<?php

$numbers = array(12, 13, 15, 14); //OUR ARRAY

function sum ($array){ //FUNCTION DECLARATION AND DEFINITION
    $sum = 0;
    for ($num = 0; $num <=3; $num++)
    {
        $sum += $array[$num];
    }

    echo "<h1><b>Sum of array is: </b></h1>" . $sum . ".";
}

sum ($numbers); //FUNCTION CALL
?>
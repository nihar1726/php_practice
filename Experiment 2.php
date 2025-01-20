<?php
//TASK 1: Print values using an indexed array in ascending and descending order.
$les_nombres = array(15, 48, 15, 23, 78, 01, 23, 89, 111, 189, 24, 48);

echo "<b>Here is the array<br></br></b>";
echo '<pre>';
print_r($les_nombres);
echo '</pre>';

echo '<b>Our array in ascending order<br></b>';
sort( $les_nombres );
echo '<pre>';
print_r($les_nombres);
echo '</pre>';

echo '<b>Our array in descending order<br></b>';
rsort( $les_nombres );
echo '<pre>';
print_r($les_nombres);
echo '</pre>';

echo '<hr>';

//TASK 2: Print grades of students stored in an associative array using foreach loop
$grades = array("Zach" => 56, "Cynthia" => 55, "Ariana" => 52, "Bowen" => 56, "Jonathan" => 60);

echo '<b>Grades of students<br><br></b>';
foreach($grades as $student => $score)
{
    echo $student . ' scored ' . $score . '<br>';
}

echo '<hr>';

//TASK 3: Print values stored in a multidimentional array.

$friends = array(
    'Paramveer' => array(
        'Interests' => 'Russian Ballet',
        'Sports' => 'Tennis',
    ),
    'Priyanshi' => array(
        'Interests' => 'Natural language processing',
        'Sports' => 'Badminton',
    ),
    'Diya' => array(
        'Interests' => 'Foodie!',
        'Sports' => 'Javelin throw',
    ),
    'Satyam' => array(
        'Interests' => 'Ghost stories',
        'Sports' => 'Carrom',
    ),
);

echo '<b>Values stored in a multidimentional array<br><br></b>';

foreach($friends as $friend => $deets)
{
    echo '<b>' . $friend . '</b><br>';
    foreach($deets as $key => $value)
    {
        echo $key . ': ' . $value . '<br>';
    }
    echo '<br>';
}

echo '<hr>';

//TASK 5: Print values stored in an associative array in ascending and descending order.

$countries = array("India" => 1, "Philipenes" => 2, "UK" => 3, "Japan" => 4, "Canada" => 5);

echo '<b>Values stored in an associative array<br><br></b>';
foreach($countries as $country => $deets)
{
    echo '<i>'.$country . ' is at ' . $deets . ' position</i><br>';
}

echo '<br><b>Values stored in an associative array in ascending order<br><br></b>';
asort($countries);
foreach($countries as $country => $deets)
{
    echo $country . ' is at ' . $deets . ' position<br>';
}
echo '<br>';
echo '<b>Values stored in an associative array in descending order<br><br></b>';
arsort($countries);
foreach($countries as $country => $deets)
{
    echo $country . ' is at ' . $deets . ' position<br>';
}

echo '<hr>';
?>



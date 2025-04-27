<?php

$servername = "localhost";
$username = "root"; 
$password = "";

//ESTABLISHING CONNECTION
$conn = new mysqli ($servername, $username, $password);

//CHECKING CONNECTION
if (!$conn) {
    die ("Connection failed!:" . mysqli_connect_error());
}

//CREATING DATABASE
$sql = "CREATE DATABASE IF NOT EXISTS auth_system";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully!";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

//CLOSING CONNECTION
mysqli_close($conn);
?>

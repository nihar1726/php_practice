<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "auth_system";

//Let's connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL query to create a table
$sql = "CREATE TABLE IF NOT EXISTS USERS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table USERS created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

//Close connection
mysqli_close($conn);
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'renting';
$tablename = 'pg_list';

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS `$dbname`";
if ($conn->query($sql) === TRUE) {
    // echo "Successfully created Database. ";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS `owner` (
    `email` VARCHAR(30) NOT NULL primary key,
    `name` VARCHAR(20) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(12) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // echo "Successfully created Table '$tablename'. ";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->select_db($dbname);

$sql = "CREATE TABLE IF NOT EXISTS `$tablename` (
    university VARCHAR(30) NOT NULL,
    pgname VARCHAR(30) NOT NULL,
    distance INT NOT NULL,
    budget INT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    // echo "Successfully created Table '$tablename'. ";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>

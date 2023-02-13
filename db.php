<?php
//server with default setting (user 'root' with no password)
$host = 'localhost';
$username = 'root';
$password = "";
$database = 'makeupapp';

// connecting ....... CONNECT 
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
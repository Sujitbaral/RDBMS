<?php
    $_SERVER='localhost';
    $username = 'root';
    $password = '';
    $db = 'rdbms';

$conn = mysqli_connect($_SERVER, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
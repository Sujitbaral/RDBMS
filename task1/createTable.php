<?php require('connection.php'); ?>
<?php
// sql to create table
$sql = "CREATE TABLE intern (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
intern_name VARCHAR(50) NOT NULL,
Age INT(2),
Gender VARCHAR(50),
Designation VARCHAR(30),
Hobby VARCHAR(35)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table intern created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
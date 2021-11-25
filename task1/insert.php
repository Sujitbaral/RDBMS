<?php require('connection.php');
$sql = "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Sujit kumar Baral', 22, 'Male','Wordpress Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Suresh thapa', 22, 'Male','Wordpress Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Preeti khatri', 22, 'Female','Wordpress Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Poonam bhat', 22, 'Female','Wordpress Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Kusal Piya', 22, 'Male','Wordpress Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Swejal Shrestha', 22, 'Male','Js Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Shishir Neupane', 22, 'Male','Js Developer','Animation'); " ;
$sql .= "INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('Merina Dhaugoda', 22, 'Female','Js Developer','Animation'); " ;

if ($conn->multi_query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php require('connection.php'); 

$sql = "SELECT  `intern_name`, `Age`, `Gender`, `Designation`, `Hobby` FROM `intern` WHERE Gender = 'male' ORDER BY intern_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["intern_name"]. " Gender: " . $row["Gender"]. " Designation: " . $row["Designation"].  " Hobby: " . $row["Hobby"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
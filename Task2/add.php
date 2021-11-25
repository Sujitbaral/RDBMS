<?php require('connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<form action="add.php" method="post">
Name: <br><input type="text" name="name" class="feild"><br>
Age: <br><input type="text" name="age" class="feild"><br>
Gender: <br><input type="text" name="gender" class="feild"><br>
Designation: <br><input type="text" name="designation" class="feild"><br>
Hobby: <br><input type="text" name="hobby" class="feild"><br>


<input type="submit" class="btn">

</div>
</body>
</html>

<?php
if(isset($_POST['name'])){

$name  =$_POST['name'];
$age  =$_POST['age'];
$gender =$_POST['gender'];
$designation =$_POST['designation'];
$hobby  =$_POST['hobby'];

$query ="INSERT INTO `intern`(`intern_name`, `Age`, `Gender`, `Designation`, `Hobby`) VALUES ('$name', $age ,'$gender','$designation','$hobby');";

if ($conn ->query($query)== TRUE){
    //echo "Successful INsertion";

    //redirect to a file that shows all data
    header('Location:show.php');
}
    else
    echo $conn->error;
}
$conn -> close();
?>

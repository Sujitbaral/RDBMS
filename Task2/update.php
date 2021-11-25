<?php require('connection.php'); 

if(isset($_POST['update'])){
    $id= $_POST['id'];
    $name=$_POST['name'];
    $age =$_POST['age'];
    $gender= $_POST['gender'];
    $designation= $_POST['designation'];
    $hobby= $_POST['hobby'];

    $query =  "UPDATE `intern` SET `intern_name`='$name',`Age`=$age,`Gender`='$gender',`Designation`='$designation',`Hobby`='$hobby' WHERE `id`='$id'";
if ($conn ->query($query)== TRUE){
    //echo "Successful INsertion";

    //redirect to a file that shows all data
    
    header('Location:show.php');
}
    else{
    echo $conn->error;
}
}

 if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `intern` WHERE `id`= $id;";
    $result = $conn -> query($query);

    if($result ->num_rows >0){
        while ($row= $result->fetch_assoc()){
            $id =$row['id'];
            $name =$row['intern_name'];
            $age =$row['Age'];
            $gender= $row['Gender'];
            $designation =$row['Designation'];
            $hobby =$row['Hobby'];
        }
    }
    $conn -> close();
}
 ?>

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
<form action="" method="post">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
Name: <br><input type="text" name="name" value=<?php echo $name; ?> class="feild"><br>
Age: <br><input type="text" name="age" value=<?php echo $age; ?> class="feild"><br>
Gender: <br><input type="text" name="gender" value=<?php echo $gender; ?> class="feild"><br>
Designation: <br><input type="text" name="designation" value=<?php echo $designation; ?> class="feild"><br>
Hobby: <br><input type="text" name="hobby" value=<?php echo $hobby; ?> class="feild"><br>


<input type="submit" name="update" class="btn">
</form>
</div>
</body>
</html>

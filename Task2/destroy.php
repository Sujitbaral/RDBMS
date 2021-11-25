<?php require('connection.php'); 

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `intern` WHERE `id`=$id;";
   
    if ($conn ->query($query)== TRUE){
        //echo "Successful INsertion";
    
        //redirect to a file that shows all data
        
        header('Location:show.php');
    }
        else{
        echo $conn->error;
    }
    }

    ?>
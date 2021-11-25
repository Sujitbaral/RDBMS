<?php require('connection.php'); 

$query = "SELECT * FROM `intern`";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if (mysqli_num_rows($result)>0) {
            # code...
        ?>
        <table class="table1" >
            <tr>
                <th> Name </th>
                <th> Age </th>
                <th> Gender </th>
                <th> Designation </th>
                <th> Hobby </th>
                <th> Action </th>
                <th> Action </th>
            </tr>    
            <?php
                while ($row=mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['intern_name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['Designation']; ?></td>
                        <td><?php echo $row['Hobby']; ?></td>
                        <td> <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                        <td> <a href="destroy.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>

                <?php }
            ?>
        </table>
        
     <?php }
     else{
         echo "NO data";
     }   
    ?>
</body>
</html>
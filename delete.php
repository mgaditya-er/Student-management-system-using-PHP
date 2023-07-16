<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    
<div id="con">
    <div class="navbar"> 
            
        <h1>Student Management</h1>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="add.php">Add</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="delete.php">Delete</a></li>
           
        </ul>
    </div>
    <?php  
    $conn = mysqli_connect("localhost","root","","crud") or die("connection not connected"); 
    if(isset($_POST['deletebtn'])){
       include "cong.php";

       $stu_id=$_POST['sid'];
       $sql = "delete from student where sid={$stu_id}";    //////sql command using join
       $result = mysqli_query($conn,$sql) or die("Query unsucessful"); 

       header("location:http://localhost/curd/index.php");

       mysqli_close($conn);
    }
    
    
    
    ?>




   <div class="cont"> <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Roll No</label>
            <input type="text" name="sid" placeholder="Enter the Roll Number"/>
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form></div>
</div>

</body>
</html>

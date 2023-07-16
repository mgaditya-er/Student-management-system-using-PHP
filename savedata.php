<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class= $_POST['class'];
$stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud") or die("connection not connected");   ///////connection created here...............

//          1.mysqli_connect(server Name,user Name,password,database Name)

$sql = "insert into student(sname,sadd,sclass,sphone) values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";    //////sql command using join
$result = mysqli_query($conn,$sql) or die("Query unsucessful");    
                  ///////to run sql querry we cse 

 //       2. mysqli_query(connection Name,SQl querry)  

 //aer submit again come back to home page to see data we use
 header("location:http://localhost/curd/index.php");

 mysqli_close($conn);  //here closed connection

 
?>
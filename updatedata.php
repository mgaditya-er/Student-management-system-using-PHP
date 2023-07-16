<?php
$stu_id=$_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class= $_POST['sclass'];
$stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud") or die("connection not connected");   ///////connection created here...............

//          1.mysqli_connect(server Name,user Name,password,database Name)

$sql = "update student set sname='{$stu_name}',sadd='{$stu_address}',sclass='{$stu_class}',sphone='{$stu_phone}' where sid={$stu_id}";   
                  ///////to run sql querry we cse 

 //       2. mysqli_query(connection Name,SQl querry)  
 $result = mysqli_query($conn,$sql) or die("Query unsucessful"); 
 //aer submit again come back to home page to see data we use
 header("location: http://localhost/curd/index.php");

 mysqli_close($conn);  //here closed connection

 
?>
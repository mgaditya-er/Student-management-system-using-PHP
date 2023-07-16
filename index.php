<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="index copy.css">
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
    
    <div class="cont">
[]        <h2>All Records</h2>
           <?php  $conn = mysqli_connect("localhost","root","","crud") or die("connection not connected");   ///////connection created here...............

                        //          1.mysqli_connect(server Name,user Name,password,database Name)

           $sql = "select * from student join student_class where student.sclass = student_class.cid";    //////sql command using join
           $result = mysqli_query($conn,$sql) or die("Query unsucessful");                      ///////to run sql querry we cse 

                         //       2. mysqli_query(connection Name,SQl querry)         

           if(mysqli_num_rows($result) > 0) {?>               
        <div class="co">
            <table border="2px"   cellpadding="7px">
                <thead>
                   
                <tr>
                   <th>Id</th>
                   <th>Name</th>
                   <th>Address</th>
                   <th>Class</th>
                   <th>Phone</th>
                   <th>Action</th>
                 </tr>
                </thead>
                <tbody>
                    <?php 
                       while($row = mysqli_fetch_assoc($result)){

                      
                       ?>
                    <tr>
                        <td><?php echo $row['sid']?> </td>
                        <td><?php  echo $row['sname'];?></td>
                        <td><?php echo $row['sadd']; ?></td>
                        <td><?php echo $row['cname']; ?></td>
                        <td><?php echo $row['sphone']; ?></td>
                        <td>
                            <a href='update.php?id=<?php echo $row['sid']?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['sid']?>'>Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
       <?php }else{
        echo "<h2>No record </h2>";
       }
       
       mysqli_close($conn);     //////////   connection close

       //   3.mysqli_close(connection Name)
       
       ?>
        </div>
   
    </div>
    
</div>
</div>
</body>
</html>

    
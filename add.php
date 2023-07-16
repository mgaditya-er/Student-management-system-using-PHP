<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="add.css">
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
    <div class="cont"><h2>Add New Record</h2>
        <div class="co">
            
            <form class="post-form" action="savedata.php" method="post">   <!-- here are only two method get & post -->
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="sname" placeholder="Enter your name" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress"placeholder="Enter your Address" />
                </div>
                <div class="form-group">
                    <label>Branch</label>
                    <select name="class">
                        <option value="" selected disabled>Select Class</option>
                        <?php
                          $conn = mysqli_connect("localhost","root","","crud") or die("connection not connected");   ///////connection created here...............

                           //         step 1.mysqli_connect(server Name,user Name,password,database Name)
   
                           $sql = "select * from student_class ";    //////sql command using join
                           $result = mysqli_query($conn,$sql) or die("Query unsucessful");                      ///////to run sql querry we cse 
   
                            //    sep  2. mysqli_query(connection Name,SQl querry)        
                            
                            while($row = mysqli_fetch_assoc($result)){

                          


   
                        ?>
                        <option value="<?php echo $row['cid']; ?>"><?php echo $row['cname']; ?></option>
                        <?php } ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="sphone" placeholder="Enter Mobile number" />
                </div>
                <input class="submit" type="submit" value="Save"  />
            </form>
        </div>
       </div>
</div>
</div>
</body>
</html>

</body>
</html>
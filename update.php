<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bg.css">
    <link rel="stylesheet" href="update.css">
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
            <h2>Edit Record</h2>
            <div class="form">
                <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <label>Roll no</label>
                        <input type="text" name="sid" placeholder="Enter your Roll number" />
                    </div>
                    <input class="submit" type="submit" name="showbtn" value="Show" />
                </form>

                <?php 
                if(isset($_POST['showbtn'])){
                    $conn=mysqli_connect("localhost","root","","crud") or die("connection il");
                    $stu_id=$_POST['sid'];
                    $sql="select * from student where sid={$stu_id}";
                    $result=mysqli_query($conn,$sql) or die("Query unsuccessl");

                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                    

                
                
                ?>
    
                <form class="post-form" action="updatedata.php" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" name="sid"  value="<?php echo $row['sid'];?>" />
                        <input type="text" name="sname" value="<?php echo $row['sname'];?>" placeholder="Enter your Full Name" />
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="saddress" value="<?php echo $row['sadd'];?>"  placeholder="Enter your Address"/>
                    </div>
                    <div class="form-group">
                        <label>Branch</label>
                       <?php  
                       $sqli="select * from student_class";
                       $result1=mysqli_query($conn,$sqli) or die("query unsuccessl");
                       if(mysqli_num_rows($result1)>0){
                        echo'<select name="sclass">';
                        while($row1=mysqli_fetch_assoc($result1)){
                            if($row['sclass']==$row1['cid']){
                                $select="selected";

                            }else{
                                $select="";
                            }
                            echo "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
                        }
                        echo"</select>";
                    }

                       ?>
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="sphone" value="<?php echo $row['sphone'];?>" placeholder="Enter your Mobile Number" />
                    </div>
                    <input class="submit" type="submit" value="Update" />
                </form>
                   
                </form>
                <?php }
                    }
                }
                ?>
            </div>

           
        </div>
    </div>
</body>

</html>
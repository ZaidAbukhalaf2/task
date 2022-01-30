<?php

include('includes/config.php');
include("includes/header.php"); 

session_start();
if(!isset($_SESSION['Admin_user']))
header("Location:login.php");

$sql= "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if(isset($_GET['deleteid'])){

    $Id=$_GET['deleteid'];

    $sql1= "DELETE FROM `users` WHERE Id=$Id";
    $result=mysqli_query($conn,$sql1);
    
    if($result){

      header("Location:Users.php");
    }else{

      die(mysqli_error($conn));
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    
   
  
    </style>
</head>
<body>
    <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white; " role="navigation">

<?php include("includes/top_nav.php")?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
<?php include("includes/side_nav.php")?>

<!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
        <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
    <button style=" width: 126px;
    height: 60px;
    background-color: blue;
    border-radius: 7px;
    border-left-width: 1px;
    margin-left: 330px;
    color: white;
    margin-top: 84px;
    margin-bottom: 18px; font-size: x-large;"><a href="Adduser.php" style="text-decoration: none; color:white">Add user</a></button>
<table style="width:70%;">
<tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Action</th>

</tr>
<?php

while ($rows=mysqli_fetch_assoc($result)) {
   

?>
         
         <tr>
                <td><?php echo $rows['id']; ?></td>
                <td><?php echo $rows['username'];?></td>
                <td><?php echo $rows['Email'] ;?></td>
               

               
                <td>
                
                <button style="width: 70px;height: 44px;background-color:blue;border-radius: 7px;color:white;font-size:large">
                    <a href="Update.php?id=<?php echo $rows['id']?>" style="text-decoration: none;color: white;">Update</a></button>
         <button style=" width: 70px; height: 44px;background-color: red;border-radius: 7px; border-left-width: 1px;margin-left:18px;color:white;font-size:large" >
        <a href="Users.php?deleteid=<?php echo $rows['id']?>" style="text-decoration: none;color: white;">Delet</a> </button> 
               
            </td>
            
            </tr>
         
<?php
}
?>
        
    
    </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->


        </div>
        
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>

</body>
</html>
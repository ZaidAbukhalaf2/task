<?php

include('includes/config.php');
include("includes/header.php"); 

session_start();


if(!isset($_SESSION['Admin_user']))
header("Location:login.php");

if(isset($_POST["Add"])){

    $name = $_POST['username'];

    $Email = $_POST['Email'];

    $Pass = $_POST['Pass'];


    $sql= " INSERT INTO users (username,Email,Pass) VALUES ('$name','$Email','$Pass')";

        $result = mysqli_query($conn,$sql);

        if($result == true){

            header("Location:Users.php");
        }else{
            echo mysqli_error($conn);
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
</head>
<body>
      <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white; role="navigation">

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

 
<h1 style=" text-align: center">Add User</h1>
<form method ="Post" class="f">
  <div class="form-group">
    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" class="form-control"  aria-describedby="emailHelp" placeholder="user Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email:</label>
    <input type="email" name="Email" class="form-control"  placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pass:</label>
    <input type="pass" name="Pass" class="form-control"  placeholder="Pass">
  </div>
  <button name="Add" type="submit" class="btn btn-primary">Submit</button>
</form>
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
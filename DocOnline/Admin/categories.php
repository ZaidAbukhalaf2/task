<?php

include('includes/config.php');
include("includes/header.php"); 

session_start();

if(!isset($_SESSION['Admin_user']))
header("Location:login.php");

if(isset($_POST['Add'])){

    $name=$_POST['Name'];

$sql="INSERT INTO category (Name) VALUES ('$name')";

$result= mysqli_query($conn,$sql);

if($result == true){

    echo "done";
}else{

    echo mysqli_error($sql);
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
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white;" role="navigation">

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

 
<h1 style=" text-align: center">Add category</h1>
<form method ="Post" class="f">
  <div class="form-group">
    <h3>New category</h3>
    <input type="text" name="Name" class="form-control"  aria-describedby="emailHelp" placeholder="New category">
    
  </div>
  
  <button name="Add" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

</div>


        </div>
        
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
</body>
</html>
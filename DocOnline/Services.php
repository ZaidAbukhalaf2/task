<?php

include('Admin/includes/config.php');
include("Admin/includes/header.php"); 

session_start();

if(!isset($_SESSION['user']))
header("Location:index.php");

$sql = "SELECT * FROM services ";

$result= mysqli_query($conn,$sql);

if($result == true){

    // echo " done";

}else{

    echo mysqli_error($sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="Admin/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="Services.php">Services</a>
        
      </div>
    </div>
  </div>
</nav>
<form method="Post">
  <div class="row">

  
        <?php
        
        while($rows=mysqli_fetch_assoc($result)){

        ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card" style="width:70%">
              <img src='Admin/img/<?= $rows['img'] ?>' width="70%" height="40%">
              <div class="card-body">
                  <h3><?php echo $rows['Name']?></h3>
                <h5 class="card-title"><?php echo $rows['Title']?></h5>
                <p class="card-text"><?php echo $rows['Description']?></p>
                <button type="submit" class="b" ><a href="Booking.php?id=<?php echo $rows['id']?> "> Information </a></button> 
             
              </div>
            </div>
          </div>
    
    <?php } ?>
  </div>
<form>
</body>
</html>
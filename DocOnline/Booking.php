<?php
include('Admin/includes/config.php');
session_start();


if(!isset($_SESSION['user']))
header("Location:index.php");

if(isset($_POST['save'])){

    $user = $_POST['username'];
    $email = $_POST['Email'];
    $date = $_POST['Date'];
    $services = $_GET['id'];

        $sql1="INSERT INTO Bookings (username,Email,Date,services,user_id) VALUES ('$user','$email','$date','$services', " . $_SESSION['user'] . ")";

        $action = mysqli_query($conn,$sql1);
        
        if($action == true){

            // echo "Booking is Done";
        }else{
            // echo mysqli_error($conn);
        }


} 

$sql = "SELECT * FROM services WHERE id = " . $_GET['id'];
$result = mysqli_query($conn,$sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

        <?php
        
        while($rows=mysqli_fetch_assoc($result)){

        ?>
          
              

                <div class="card">
        <div class="card-body">
        <img src='Admin/img/<?= $rows['img'] ?>' width="40%" height="18%">
        <h1><?php echo $rows['Name']?></h1>
        <h2 class="card-title"><?php echo $rows['Title']?></h2>
        <p class="card-text"><?php echo $rows['Description']?></p>
            
            </div>
        </div>
            
    
    <?php } ?>


    <form method="Post">
<div class="col-6" 
        style="border-radius: 8px;
        border: 1px solid black;
        box-shadow: 5px 3px 4px #888888;">
        <div class="form-group" style="margin-top:45px">
    <label for="category_id">username</label>
    <input type="text" name="username" class="form-control"placeholder="username">
  </div>
  <div class="form-group" style="margin-top:45px">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" name="Email" class="form-control"  aria-describedby="emailHelp" placeholder=" Email">
    
  </div>
  <div class="form-group"  style="margin-top:45px">
    <label for="exampleInputPassword1">Date:</label>
    <input type="date" name="Date" class="form-control"  placeholder="Date">
  </div>
  <br>
  <div>
  <button name="save" type="submit" class="btn btn-primary" style="margin-top:45px">Submit</button>
        </div>
        </div>
        </div>
</form>
</body>
</html>

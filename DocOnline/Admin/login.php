<?php

include('includes/config.php');
session_start();

if(isset($_SESSION['Admin_user']))
header("Location:index.php");

if(isset($_POST['save'])){


  $username=$_POST['username'];
  $email=$_POST['email'];
  // $id=$_POST['id'];

  $sql="SELECT * FROM Admin WHERE username = '$username' and email = '$email'";

  $result=mysqli_query($conn,$sql);

  $query_set = mysqli_fetch_assoc($result);

 
  
  if(mysqli_num_rows($result) == 1) {

    $_SESSION['Admin_user']=$query_set['id'];
     header('Location:index.php');

   }else{

      $error = "Incorrect username or password.";
      }
      

}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/gg.css">
    <style>
     
    </style>
  </head>
  <body>

    <form  method ="post"  style=" box-shadow: -9px,2px; box-shadow: 4px 7px 6px 2px #888888;">

      <img src="https://www.comotrabalhar.org/wp-content/uploads/2016/10/vagas-log-in-logistica.png"style="width: 180px; margin-left: 220px;border-radius: 10px;margin-top: 13px;">
      <div class="formcontainer">
      <div class="container">
        <label for="Name"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="username" required>
        <label for="Pass"><strong>Pass</strong></label>
        <input type="email" placeholder="Enter email" name="email" required>
      </div>
      <button name="save" type="submit">Login</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <span class="psw"><a href="index.php" style="margin-left: 305px;margin-right: 21px;font-size: larger;text-decoration: none;">sign up</a></span>
        </label>
        <span class="psw"><a href="edit.php" style="font-size: larger;text-decoration: none;"> Forgot Pass?</a></span>
      </div>
    </form>
  </body>
</html>

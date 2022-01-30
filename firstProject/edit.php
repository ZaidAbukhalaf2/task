<?php
require 'config.php';

if(isset($_POST["Update"])){
    $NewPass=$_POST['Pass'];
    $username=$_POST['username'];
    $email=$_POST['Email'];
    $newemail=$_POST['Newemail'];
    $sql = " UPDATE users SET password='$NewPass',username='$username' ,Email='$newemail' WHERE Email= '$email'";

if (mysqli_query($conn,$sql)){

    echo "Update is done";

}else{
    echo"Update is error";
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
      <center>
<form method="post"  style="margin-top: 300px;
    border: 1px solid;
    height: 525px;
    width: 509px;
    border-radius: 8px;
    box-shadow: -9px,2px;
    
    box-shadow: 4px 7px 6px 2px #888888;">
    <div style="margin-top: 135px;">
    <label for="Emai" style="margin-left: 31px;"><strong>Email</strong></label> 
   <input type="text" placeholder="username" name="Email" required style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;">
</div>
<div>
    <label for="Newemail"><strong>NewEmail</strong></label> 
   <input type="text" placeholder="username" name="Newemail" required style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;">
</div>
<div>
    <label for="username" style="margin-left: 5px;"><strong>username</strong></label> 
   <input type="text" placeholder="username" name="username" required style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;"> 
</div>
      <div>
  <label for="Pass"><strong>NEW Password</strong></label> 
   <input type="password" placeholder="Enter New Password" name="Pass" required style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;
    margin-right: 40px;">
</div>
   <button type="submit" name='Update' style="width: 111px;border-radius: 7px;height: 35px;margin-left:31px;margin-top: 14px;">Update</button>
</form>
</center>
  </body>
  </html>
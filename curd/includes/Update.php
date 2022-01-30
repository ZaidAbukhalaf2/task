<?php

require ('Config.php');

if(isset($_POST["save"])){
    $F_name=$_POST['FirstName'];
    $L_name = $_POST['LName'];
    $location = $_POST['Address'];
    $id = $_GET['Id'];
    $sql = "UPDATE user SET FirstName='$F_name',LName='$L_name' ,Address='$location' WHERE Id='$id'";

    $result = mysqli_query($conn,$sql);

    if($result == true) {
    
        header("Location:../index.php");

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
<form method="post" 
    style=" width: 34%; border: 1px solid gray;
    height: 325px; margin-left: 500px;
    margin-top: 342px;border-radius: 10px;box-shadow: 1px 3px 2px 4px grey;">
     <h1 style=" text-align: center">Update</h1>
    <label style="margin-left: 102px;">FirestName:</label>
    <input type="text" name="FirstName" id="FirstName" style="width: 40%;height: 35px;border-radius: 8px;">
    <br>
    <label style="padding-left: 5px;margin-left: 102px;">Last Name:</label>
    <input type="text" name="LName" id="LName" style="width: 40%;height: 35px;border-radius: 8px;margin-top:15px;">
    <br>
    <label style="padding-left: 21px;margin-left: 102px;">Address:</label>
    <input type="text" name="Address" id="Address" style="width: 40%;height: 35px;border-radius: 8px;margin-top:15px;">
<br>
    <button name="save" style=" width: 151px;
    height: 40px;border-radius:7px;
    margin-top:18px;margin-left: 250px;
    margin-right: 25px;background-color: steelblue;
    color:white; font-size: large;" type="submit">Save</button>
   
</form>
</body>
</html>
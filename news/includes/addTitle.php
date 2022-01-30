<?php
require('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    

    $sql = "INSERT INTO category (title ) VALUES ('$title') ";
    
    $result = mysqli_query($conn,$sql);
    
    if($result == true) {
    
        
        header("Location:dash.php");
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

<form method="post" action="" enctype="multipart/form-data"
    style=" width: 34%; border: 1px solid gray;
    height: 400px; margin-left: 500px;
    margin-top: 342px;border-radius: 10px;box-shadow: 1px 3px 2px 4px grey;">
     <h1 style=" text-align: center">Add category</h1>
    <label style="margin-left: 102px;">Title:</label>
    <input type="text" name="title" id="title" style="width: 40%;height: 35px;border-radius: 8px;">
    
    <button name="save" style=" width: 109px;
    height: 40px;border-radius:7px;
    margin-top:10px;margin-left: 197px;
    margin-right: 25px;background-color: steelblue;
    color:white; font-size: large;" type="submit">Save</button>
</body>
</html>
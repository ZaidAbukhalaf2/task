<?php

require ('Config.php');

if(isset($_GET['deleteid'])){

    $Id=$_GET['deleteid'];

    $sql= "DELETE FROM `user` WHERE Id=$Id";
    $result=mysqli_query($conn,$sql);
    
    if($result){

      header("Location:../index.php");
    }else{

      die(mysqli_error($conn));
    }

}



?>
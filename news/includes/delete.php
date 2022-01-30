<?php

require('conn.php');

if(isset($_GET['deleteid'])){

    $Id=$_GET['deleteid'];

    $sql= "DELETE FROM `News` WHERE Id=$Id";
    $result=mysqli_query($conn,$sql);
    
    if($result){

      header("Location:dash.php");
    }else{

      die(mysqli_error($conn));
    }

}



?>
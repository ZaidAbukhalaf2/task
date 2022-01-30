<?php

function getConn(){


$db_host = "localhost";
$db_name = "account";
$db_user = "root";
$db_pass = "";

$conn = $conn = new mysqli($db_host,$db_user, $db_pass,$db_name); 

if (mysqli_connect_error()) {
    
    echo mysqli_connect_error();
    
    exit;
  }
//   echo "Connected successfully";

  return $conn;

}
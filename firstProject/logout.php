<?php



// require 'url.php';

session_start();

$_SESSION['is_logged_in'] = true;

 if($_SESSION == false ) {

    header("Location: test.php");
 }else{
     
   

 }
    

// redirect('/');

session_destroy();
 
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


<h1>Hello  </h1>
    

<button type="submit">logout</button>



</body>
</html>
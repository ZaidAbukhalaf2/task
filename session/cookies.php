<?php

$maincolor = '#fff';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $maincolor = $_POST['color'];

    setcookie('background',$maincolor,time()+3600,'/');
}

if(isset($_COOKIE['background'])){

    $body = $_COOKIE['background'];
}else{
    
    $body= $maincolor;
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
<body style="background-color:<?php  echo $body?>">

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post">

<input type="color" name="color">
<input type = "submit" value="Choose">
</form>
</body>
</html>
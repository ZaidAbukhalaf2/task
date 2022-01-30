<?php
require 'config.php';



$errors = [];
$username = '';
$Email = '';
$pass = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $Email = $_POST['Email'];
    $pass = $_POST['password'];

    if (empty($username)) {
        $errors["username"] = 'username is required';
    }
    if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
        $error= true;
        $errors['Email'] = 'Email is required';

    }
    if (empty($pass)) {
        $errors['pass'] = 'pass is required';
    }

    if (empty($errors)) {
            $username = $_POST['username'];
            $Email = $_POST['Email'];
            $pass = $_POST['password'];

            $sql= "INSERT INTO users (username,Email,password) VALUES ('$username','$Email','$pass')"; 

            $result = mysqli_query($conn,$sql);

            if($result == true) {
                header("Location: ../index.php");
            }       
        }
    
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>


<center>
<form method="post" action="index.php"  style="margin-top: 300px;
    border: 1px solid;
    height: 525px;
    width: 509px;
    border-radius: 8px;
    box-shadow: -9px,2px;
    
    box-shadow: 4px 7px 6px 2px #888888;">

<div>
    <img src="https://modburybowlingclub.com.au/wp-content/uploads/2020/07/Register-now_teal_splash.jpg" style=" width: 180px;">
</div>
<div style="margin-top: 20px;">

<label for="username">username</label>
<input name="username" id="username" placeholder="username" value="<?= $username; ?>" style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;">
<?php if(isset($errors['username'])): ?>
    <p><?= $errors['username'] ?></p>
<?php endif; ?>
</div>

<div>
<label for="content" style="margin-left:18px">Email</label>
<input name="Email" id="Email" placeholder="email"  value="<?= $Email; ?> "style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;">

<?php if(isset($errors['Email'])): ?>
    <p><?= $errors['Email'] ?></p>
<?php endif; ?>

</div>

<div>
<label for="password">password</label>
<input type="password" name="password" id="password" placeholder="password" value="<?= $pass; ?>"  style="width: 51%;
    height: 30px;
    border-radius: 5px;
    margin-bottom: 12px;"> 

<?php if(isset($errors['pass'])): ?>
    <p><?= $errors['pass'] ?></p>
<?php endif; ?>

</div>

<button type="submit" name='save' style="width: 111px;border-radius: 7px;height: 35px;margin-left:31px;margin-top: 14px;">submit</button>

</form>

</center>
</body>
</html>
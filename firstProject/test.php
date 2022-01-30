<?php

require 'calss/Database.php';
$db = new Database(); 
$conn =$db->getConn();


if(isset($_POST["save"])){

  $username=$_POST['Name'];
  $password=$_POST['Pass'];

  $sql="SELECT * FROM users WHERE username = ? and password = ?";

  $result= $conn->prepare($sql);
  $result->execute([$username, $password]);
  // $users = $result->fetchAll();
  // var_dump($result->rowCount($result));die;
  if($result->rowCount($result) >=1 ){
    
    echo "login";
    if($result == true) {
      header("Location: logout.php");
    if(is_array($result)) {
      $_SESSION["id"] = $result['id'];
      $_SESSION["name"] = $result['name'];
      } else {
       $message = "Invalid Username or Password!";
      }
      var_dump($conn->errorInfo());
  }else{

    $articles = $result->fetch(PDO::FETCH_ASSOC);

    echo " login incorrect";
  }

}
}


?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      font-family: Roboto, Arial, sans-serif;
      font-size: 15px;
      }
      form {
      margin-top: 200px;
    border-radius: 12px;
    border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] {
      width: 100%;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      h1 {
      text-align:center;
      fone-size:18;
      }
      button:hover {
      opacity: 0.8;
      }
      .formcontainer {
      text-align: left;
      margin: 24px 50px 12px;
      }
      .container {
      padding: 16px 0;
      text-align:left;
      }
      span.psw {
      float: right;
      padding-top: 0;
      padding-right: 15px;
      }
      /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
      span.psw {
      display: block;
      float: none;
      }
    </style>
  </head>
  <body>

    <form  method ="post"  action="#" style=" box-shadow: -9px,2px; box-shadow: 4px 7px 6px 2px #888888;">

      <img src="https://www.comotrabalhar.org/wp-content/uploads/2016/10/vagas-log-in-logistica.png"style="width: 180px; margin-left: 220px;border-radius: 10px;margin-top: 13px;">
      <div class="formcontainer">
      <div class="container">
        <label for="Name"><strong>Username</strong></label>
        <input type="text" placeholder="Enter Username" name="Name" required>
        <label for="Pass"><strong>Password</strong></label>
        <input type="password" placeholder="Enter Password" name="Pass" required>
      </div>
      <button type="submit" name="save" >Login</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <span class="psw"><a href="index.php" style="margin-left: 305px;margin-right: 21px;font-size: larger;text-decoration: none;">sign up</a></span>
        </label>
        <span class="psw"><a href="edit.php" style="font-size: larger;text-decoration: none;"> Forgot password?</a></span>
      </div>
    </form>
  </body>
</html>
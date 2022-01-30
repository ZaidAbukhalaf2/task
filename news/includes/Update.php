<?php
require('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $Dec = $_POST['Description'];
    $category = $_POST['category'];
    $filename = $_FILES['Imge']['name'];
    $folderImge= "includes/Imge/".$filename;
    $id=$_GET['Id'];

    $sql = "UPDATE News SET title='$title',Description='$Dec' ,category_id='$category',Imge='$filename'  WHERE Id='$id';";    
    
    $result = mysqli_query($conn,$sql);
    
    if($result == true) {
    
        echo "done";
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
<form method="post" action="" enctype="multipart/form-data"
    style=" width: 34%; border: 1px solid gray;
    height: 400px; margin-left: 500px;
    margin-top: 342px;border-radius: 10px;box-shadow: 1px 3px 2px 4px grey;">
     <h1 style=" text-align: center">Update category</h1>
     
    <label style="margin-left: 102px;">Title:</label>
    <select name="category" id="">
    <?php 
    $sql = "SELECT * FROM category";
    $p = mysqli_query($conn,$sql);

while ($rows=mysqli_fetch_assoc($p)) {
  
    ?>
   
    <option value="<?= $rows['id'] ?>"><?php echo $rows['title'];?></option>
   
 
  <?php   } ?>
  </select>
  <br><br>
  <label style="margin-left: 102px;">Title:</label>
    <input type="text" name="title" id="title" style="width: 40%;height: 35px;border-radius: 8px;">
  <br>
    <label style="padding-left: 5px;margin-left:54px;">Description:</label>
    <input type="text" name="Description" id="Description" style="width: 40%;height: 35px;border-radius: 8px;margin-top:15px;">
<br>
<label style="padding-left: 21px;margin-left: 102px;margin-top: 8px;">Imge:</label>
    <input type="file" name="Imge" style="font-size: larger;">
  
  <div>
      <!-- <button type="submit" name="Imge"
          style="margin-left:164px;margin-top: 12px;
    width: 30%;height: 35px;">
        UPLOAD
      </button> -->
    <button name="save" style=" width: 109px;
    height: 40px;border-radius:7px;
    margin-top:10px;margin-left: 197px;
    margin-right: 25px;background-color: steelblue;
    color:white; font-size: large;" type="submit">Save</button>
    
</form>
</body>
</html>
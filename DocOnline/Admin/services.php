<?php

include('includes/config.php');
include("includes/header.php"); 

session_start();

if(!isset($_SESSION['Admin_user']))
header("Location:login.php");

if(isset($_POST["Add"])){

    $name = $_POST['Name'];

    $title = $_POST['Title'];

    $desc = $_POST['Description'];

    $category = $_POST['category_id'];

    $filename = $_FILES['img']['name'];

    $folderImge= "includes/Imge/".$filename;

   

    $sql= " INSERT INTO services (Name,Title,Description,img,category_id) VALUES ('$name','$title','$desc','$filename','$category')";

        $result = mysqli_query($conn,$sql);

        if($result == true){

            // header("Location:Users.php");
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
      <!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:white;" role="navigation">

<?php include("includes/top_nav.php")?>

<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            
<?php include("includes/side_nav.php")?>

<!-- /.navbar-collapse -->
</nav>

<div id="page-wrapper">
        <div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">

 
<h1 style=" text-align: center">Add Services</h1>
<form method ="Post" class="f"  enctype="multipart/form-data">
<div class="form-group">
    <label for="category_id">category_id:</label>
    <input type="int" name="category_id" class="form-control"  placeholder="category_id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" name="Name" class="form-control"  aria-describedby="emailHelp" placeholder=" Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title:</label>
    <input type="text" name="Title" class="form-control"  placeholder="Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description:</label>
    <input type="text" name="Description" class="form-control"  placeholder="Description">
  </div>
  <div>
  <label>Imge:</label>
    <input type="file" name="img" style="font-size: larger;">
  </div>
  <br>
  <label> Select categories </label>
  <select name="category" id="">
    <?php 
    $sql = "SELECT * FROM category";
    $p = mysqli_query($conn,$sql);

while ($rows=mysqli_fetch_assoc($p)) {
  
    ?>
   
    <option value="<?= $rows['id'] ?>"><?php echo $rows['Name'];?></option>
   
 
  <?php   } ?>
  </select>
  <br>

  <br>
  <button name="Add" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->


        </div>
        
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
</body>
</html>
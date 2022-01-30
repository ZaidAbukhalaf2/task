<?php
require('includes/conn.php');

$sql = "SELECT * FROM News";
$reslut = mysqli_query($conn,$sql);

$sql2 = "SELECT * FROM category";
$f = mysqli_query($conn,$sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
  
<nav style=" margin-top: 8px;background-color: red;">
<ul class="nav justify-content-end" >
  <?php
  
  while($rows= mysqli_fetch_assoc($f)){
  ?>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="includes/dediels.php?id=<?php echo $rows['id']?>"style="color:white"><?php echo $rows['title']?></a>
  </li>
  
  <?php }?>
</ul>
</nav>
<form method="post">
<div class="row">
    <div class="container-fluid col-4">
        <?php

        while ($rows=mysqli_fetch_assoc($reslut)) {
        ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
            <?php
            echo" <img src='includes/Imge/{$rows['Imge']}'";
            ?>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $rows['title'] ?></h5>
                    <p class="card-text"><?php echo $rows['Description']?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>
            <?php }?>
    </div>
</div>
</body>
</html>


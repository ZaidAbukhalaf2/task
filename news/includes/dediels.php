<?php

require('conn.php');

$sql = "SELECT * FROM News WHERE category_id = " . $_GET['id'];
$reslut = mysqli_query($conn,$sql);

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
<div class="row">
    <div class="container-fluid col-4">
        <?php

        while ($rows=mysqli_fetch_assoc($reslut)) {
        ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
            <?php
            echo" <img src='Imge/{$rows['Imge']}'";
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
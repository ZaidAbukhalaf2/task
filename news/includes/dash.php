<?php
require('conn.php');



// require'includes/Delete.php';
$sql = "SELECT News.*, category.title as categoryName FROM News INNER JOIN category ON category.id = News.category_id";
$reslut = mysqli_query($conn,$sql);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    hr{
        color:gray;
        margin-top: 400px;

    }
   
    table, th, td {
        border: 3px solid #9e9e9e14;;
      border-collapse: collapse;
      width: 100px;
      height: 40px;  
      text-align: center;
}
table{
    
    margin-left: 320px;
   background-color:white;
   border-radius: 10px;
}
    </style>
</head>
<body>
    

<button style=" width:174px;
    height: 60px;
    background-color: blue;
    border-radius: 7px;
    border-left-width: 1px;
    margin-left: 330px;
    color: white;
    margin-top: 84px;
    margin-bottom: 18px; font-size: x-large;"><a href="Add.php" style="text-decoration: none; color:white">Add category</a></button>
<table style="width:80%;">
<tr>
    <th>ID</th>
    <th>title</th>
    <th>Description</th>
    <th>Name Category</th>
    <th>Imge</th>
    <th>Action</th>

</tr>
<?php

while ($rows=mysqli_fetch_assoc($reslut)) {
   

?>
         
         <tr>
                <td><?php echo $rows['Id']; ?></td>
                <td><?php echo $rows['title'];?></td>
                <td><?php echo $rows['Description'];?></td>
                <td><?php echo $rows['categoryName'];?></td>
                <td><?php echo $rows['Imge'];?></td>

               
                <td>
                

                    <button style="width: 70px;height: 44px;background-color:blue;border-radius: 7px;color:white;font-size:large">
                    <a href="Update.php?Id=<?php echo $rows['Id']?>" style="text-decoration: none;color: white;">Update</a></button>
             <button style=" width: 70px; height: 44px;background-color: red;border-radius: 7px; border-left-width: 1px;margin-left:18px;color:white;font-size:large" >
           <a href="delete.php?deleteid=<?php echo $rows['Id']?>" style="text-decoration: none;color: white;">Delet</a> </button> 
               
            </td>
            
            </tr>
         
<?php
}
?>
</table>

</body>
</html>
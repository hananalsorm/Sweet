<?php
$coon=mysqli_connect("localhost","root","","users_db");
$id=$_GET['id'];
$up=mysqli_query($coon,"select * from photo where id=$id");
$data=mysqli_fetch_array($up);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>update</title>
</head>
<body>
<header class="header">
      <div>    
                <a class="link" href="#add">update</a>
 
      </div>
      </header>
      <div class="main">
      <form action="up.php" clas="form" method="post" enctype="multipart/form-data">
       
      <input type="text" name="id" value="<?php echo $data['id']?>" placeholder="the id" class="box"><br>
      <input id="file" type="text" name="name" value="<?php echo $data['name']?>" placeholder="the name of imag" class="box"><br>
        <input type="text" name="price" value="<?php echo $data['price']?>" placeholder="the price of imag" class="box"><br>
        <input id="x" type="file" name="iamge" placeholder="the imag"  ><br> 
        <input type="submit" name="sub" value="update" class="btn"><br>
        <a href="view.php" class="a">all the cakes </a>
</div>
</body>
</html>
<?php
$coon=new PDO("mysql:host=localhost;dbname=users_db","root","");
if(isset($_POST['sub'])){
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['iamge'];
$image_path=$_FILES['iamge']['tmp_name'];
$image_name=$_FILES['iamge']['name'];
$image_up ="photo/".$image_name;
$insert="insert into photo (name ,price ,image) values ('$name','$price','$image_up')";
$coon->query($insert);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo saved seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:add.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add1.css">
    <title>add</title>
</head>
<body>
<header class="header">
      <div>    
                <a class="link" href="#add">ADD CACKS</a>
 
      </div>
      </header>
      <div class="main">
      <form clas="form" method="post" enctype="multipart/form-data">
    
      <input id="file" type="text" name="name" placeholder="enter the name of imag" class="box"><br>
        <input type="text" name="price" placeholder="enter the price of imag" class="box"><br>
        <input id="x" type="file" name="iamge" placeholder="enter the imag"  ><br> 
        <input type="submit" name="sub" value="add " class="btn"><br>
        <a href="view.php" class="a">all the cakes </a>
</div>
</body>
</html>
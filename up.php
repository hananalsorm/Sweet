<?php
$coon=new PDO("mysql:host=localhost;dbname=users_db","root","");
if(isset($_POST['sub'])){
$id=$_POST['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$image=$_FILES['iamge'];
$image_path=$_FILES['iamge']['tmp_name'];
$image_name=$_FILES['iamge']['name'];
$image_up ="photo/".$image_name;
$update="update photo set name ='$name' ,price ='$price' ,image ='$image_up' where id=$id";
$coon->query($update);
if(move_uploaded_file($image_path , "photo/".$image_name)){
  echo "<script>alert ('photo update seccessfly') </script>";
}
else{
  echo "<script>alert ('filed') </script>";
}
header("location:view.php");
}
?>
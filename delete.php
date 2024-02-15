<?php
$coon=mysqli_connect("localhost","root","","users_db");
$id= $_GET['id'];
mysqli_query($coon, "delete from photo where id=$id");
header("location:view.php");
?>
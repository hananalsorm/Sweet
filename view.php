<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="view1.css">
    <title>view</title>
   
</head>
<body>
<center>
    <h3>All the Cakes </h3>
</center>


<?php
$coon=mysqli_connect("localhost","root","","users_db");
$result=mysqli_query($coon,"select * from photo");
while($row=mysqli_fetch_array($result)){
  echo "
  <center>
  <main>
  <div class='card' style='width: 15rem;'>
    <img src='$row[image]' 'class='card-img-top' >
    <div class='card-body'>
      <h5 class='card-title'>$row[name]</h5>
      <p class='card-text'>$row[price]</p>
      <a href='delete.php? id=$row[id]' class='btn btn-danger'>delete</a>
      <a href='update.php? id=$row[id]' class='btn btn-primary'>update</a>
    </div>
  </main>
  </center>
  ";
}

?>




</div>
</body>
</html>
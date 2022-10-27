<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['volunteer_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>volunteer page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Volunteer</span></h3>
      <h1>welcome <span><?php echo $_SESSION['volunteer_name'] ?></span></h1>
      <p>this is a Volunteer page</p>
      <a href="homescreen.html" class="btn">home</a>
      <a href="aboutus.html" class="btn">about us</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>
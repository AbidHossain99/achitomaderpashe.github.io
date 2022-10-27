<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Achi Pashe- Homescreen</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
</style>
</head>
<body class="w3-theme-l5">

<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
  ?>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#"  class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Logo</a>
  <a href="aboutus_afl.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="About us"><i class="fa fa-globe"></i></a>
  
  <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Profile"><i class="fa fa-user"></i></a>
  
  <a href="users.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages "><i class="fa fa-envelope"></i></a>

  <a href="payment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Payment "><i class="fa fa-credit-card"></i></a>

  <a href="report.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Report "><i class="fa fa-edit"></i></a>

  <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="logout"><i class="fa fa-sign-out"></i></a>

  <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
    <img src="php/images/<?php echo $row['img']; ?>" class="w3-circle" style="height:23px;width:23px" alt="Avatar"> 
  </a>
 </div>
</div>


<body>
  <center>
  <br>
  <br>
  <br>
  <br>
  <h1><b>You have received payment! </b> </h1> 
  </center>
</body>





<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <div class="w3-row">
    <div class="w3-col m3">
    </div>
    <title>Table with database</title>
   <style>
      table {
      border-collapse: collapse;
      width: 100%;
      color: #588c7e;
      font-family: monospace;
      font-size: 25px;
      text-align: left;
      }
      th {
      background-color: #588c7e;
      color: white;
      }
      tr:nth-child(even) {background-color: #f2f2f2}
   </style>
</head>
<body>
<table>
   <tr>
      <th>Account</th>
      <th>Admin Name</th>
      <th>Amount</th>
      <th>Date</th>
   </tr>

   <?php 
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    $sql = mysqli_query($conn, "SELECT * FROM spec_payment_table WHERE S_Unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      while ($row = mysqli_fetch_assoc($sql)){
        echo "<tr><td>" . $row["Payment Option"]. "</td><td>". $row["Admin Name"]. "</td><td>". $row["Amount"]. "</td><td>". $row["Date"]. "</td></tr>"; 
      }
      echo "</table>";
      
    }
   ?>
    </div>
  </div>
</div>
<br>



 

</body>
</html> 
<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <title>REport</title>
   
    <link href="style01.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <div class="Bg">
     <img src="3871896.jpg" width="1300%;"> 
  </div>
  <div class="checkout-panel">
  <form action="reported.php" method="post">

  <div class="panel-body">
    <h2 class="title">Report Problems</h2>
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholderb">Email Address</label>
        <input type="text" name="cardholderb" value="<?php echo $row['email']; ?>" />
        <label for="cardholderb">Your unique ID</label>
        <input type="text" name="unique_id" value="<?php echo $row['unique_id']; ?>" />
        <label for="cardnumberb">Give the person's First Name</label>
        <input type="Text" name="cardnumberb" placeholder="First Name"/>
        <label for="cardnumberb">Give the person's Last Name</label>
        <input type="Text" name="Amount" placeholder="Last Name"/>
        <label for="cardholderb">Report Here</label>
        <input type="text" name="report" placeholder="Text" />
      </div>
    </div>

      <div class="panel-footer">
        <button class="btn back-btn" name="back">Back</button>
        <button class="btn next-btn" name="submit">Submit</button>
      </div>
  </div>
  
  </form>
</div>


</body>
</html>
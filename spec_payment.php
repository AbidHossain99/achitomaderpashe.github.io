<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="utf-8">
    <title>Payment</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="style02.css" rel="stylesheet" type="text/css">
  </head>
<body>
  <?php 
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
  if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
  }
  ?>
  <div class="checkout-panel">
  <form action="spec_payment2.php" method="post">

  <div class="panel-body">
    <h2 class="title">Payment to specialist</h2>

      <div class="select">
      <select name="type" class="BN">
       <option selected disabled>Choose Your Payment Process</option>
       <option value="Bkash" >Bkash</option>
       <option value="Nogod">Nogod</option>
      </select>
      </div>
      <div class="input-fields">

      <div class="column-1">
        <label for="cardholderb">User Name</label>
        <input type="text" name="cardholderb" value="<?php echo $row['fname']." ". $row['lname']; ?>" />
        <label for="cardnumberb">unique_id of Specialist</label>
        <input type="int" name="U_id" placeholder="Unique ID of Specialist"/>
        <label for="sessions">Select for sessions you want to pay</label>
        <div class="select">
        <select name="Amount" class="BN">
          <option selected disabled>Sessions</option>
          <option value=300 >for 1 session</option>
          <option value=500 >for 2 sessions</option>
          <option value=800 >for 3 sessions</option>
        </select>
      </div>
      </div>
      <div class="column-2">
        <label for="date">Payment Date</label>
        <input type="date" name="date" placeholder="MM / YY"/>
        <span class="info">*We will only use your personal information in accordance with this Policy unless otherwise required by applicable law..</span>
      </div>
    </div>
    </div>
 
  <div class="panel-footer">
    <button class="btn back-btn" name="back">Back</button>
    <button class="btn next-btn" name="submit">Pay</button>
  </div>

</form>
</div>
</body>
</html>
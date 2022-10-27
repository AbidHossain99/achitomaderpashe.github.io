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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achi Pashe</title>
    <link href="style_for_cong.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="contain">
        <div class="congrats">
            <h1>Thank You for Your Report.</h1>
            <div class="done">
                <img src="Green_tick.png" class="donno" alt="Avatar">
            </div>
            <div class="text">
                <p>Your ID: <?php echo $row['unique_id'] ?>
                </p>
                <p>We will get back to you soon!
                </p>
                </div>
            <a href="<?php
					if ($row['user_type'] === 'user'){
						echo"homescreen_user.php";
						}
						elseif ($row['user_type'] === 'volunteer'){
						echo"homescreen_volun.php";
						}
						elseif ($row['user_type'] === 'specialist'){
						echo"homescreen_spec.php";
						}
						elseif ($row['user_type'] === 'admin'){
						echo"homescreen_admin.php";
						}
        		?>"> Go back </a>
        </div>
    </div>
    <script src="javascript/new.js"></script>
</body>
</html>
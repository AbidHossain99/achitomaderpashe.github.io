<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: homescreen.html");
  }
?>
<?php include_once "header.php"; ?>
<body>
<?php 
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
  ?>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span> <br>
            <p><?php echo $row['user_type'] ?></p>
            <p><?php echo $row['status']; ?></p>
          </div>
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
        		?>" class="logout">Home</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>

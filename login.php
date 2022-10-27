
<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    if ($row['user_type'] === 'user'){
      header("location: homescreen_user.php");
    }
    elseif ($row['user_type'] === 'volunteer'){
      header("location: homescreen_volun.php");
    }
    elseif ($row['user_type'] === 'specialist'){
      header("location: homescreen_spec.php");
    }
    elseif ($row['user_type'] === 'admin'){
      header("location: homescreen_admin.php");
    }
  }
?>

<?php include_once "header.php"; ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link href="style03.css" rel="stylesheet" type="text/css">
<body>
  <div class="hero">
      <nav>
      <ul>
        <li><a href="aboutus.html">About Us</a></li>
        <li><a href="login.php">Contact Us</a></li>
      </ul>
    </nav>
  <div class="content">
      <h1>Achi <span>Pashe</span></h1>
      <h3>We want to hear from you.</h3>
  </div>
  </div>


  <div class="wrapper">
    <section class="form login">
      <header>Login</header>
      <form action="homescreen.php" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button" >
          <input type="submit" name="submit" value="Login">
        </div>
      </form>
      <div class="link">Forget Password? <a href="forgotpassword.php">Click Here</a></div>
      <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>

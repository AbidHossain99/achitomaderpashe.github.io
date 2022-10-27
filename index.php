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
    <section class="form signup">
      <header>Sign Up</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field input">
          <label>Address</label>
          <input type="text" name="address" placeholder="Address" required>
        </div>
        <div class="field input">
          <label>Birth Date</label>
          <input type="date" name="dateofbirth" placeholder="Date Of Birth" required>
        </div>
        <div class="field input">
          <label>Choose User Type</label>
          <select name="user_type">
            <option value="user">user</option>
            <option value="specialist">specialist</option>
            <option value="volunteer">volunteer</option>
            <option value="admin">admin</option>
          </select>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Sign Up">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

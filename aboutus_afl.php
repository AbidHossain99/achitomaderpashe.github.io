<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: homescreen.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Achi Tomader Pashe</title>
	<link href="stylea.css" rel="stylesheet" type="text/css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<?php 
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
  ?>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Achi Pashe</h2>
			<ul>
				<li><a href = "<?php
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
        		?>">Home</a></li>
				<li><a href="report.php">Contact Us</a></li>
			</ul>
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
        		?>" class="btn">Home</a>
		</nav>

		<div class="content">
			<h4>Hello, Welcome to our website</h4>
			<h1>Achi <span>Pashe</span></h1>
			<h3>We want to hear from you.</h3>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="heart2.jpg">
			<div class="about-text">
				<h2>About Us</h2>
				<h5>Health <span>& Specialists</span></h5>
				<p>We want to hear from you. Your thoughts, your experience, your stories. No matter how dark night it is, we will be by your side. There are specialists who will help you to cope up with your problems, mental traumas, mental illness and give proper guidelines to give a full restart in your life and keep in track with your daily life. </p>
				<a href="users.php" class="btn">Lets Talk</a>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Our Services</h2>
		</div>

		<div class="box">
			<div class="card">
				<i class="fas fa-bars"></i>
				<h5>Talk to strangers</h5>
				<div class="pra">
					<p>"Strangers" term might sound like horror, but trust us. We have hired 30,000++ volunteers who are expert on this field are willing to talk to you and help you out with their free services. </p>

					<p style="text-align: center;">
						
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-user"></i>
				<h5>Specialists</h5>
				<div class="pra">
					<p>Our team has more than 500++ specialists who are already best at their position. We have also hired specialists around the world. Share your stories with them, we can guarantee they will never let you down.</p>

					<p style="text-align: center;">
						
					</p>
				</div>
			</div>

			<div class="card">
				<i class="far fa-bell"></i>
				<h5>Pay Later Service</h5>
				<div class="pra">
					<p>After recieving sessions from our specialists and volunteers, we wont ask money immidiately. Take time, heal yourself, be normal. And finally when you are capable of focusing on daily life, then you can pay us anytime you want. </p>

					<p style="text-align: center;">
						
					</p>
				</div>
			</div>
		</div>
	</div>

	<!------footer start--------->
	<footer>
		<p>Achi Tomader Pashe</p>
		<p>For more details - please click on the link below to know more about us</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">CopyRight By Achi Tomader Pashe</p>
	</footer>
</body>
</html>
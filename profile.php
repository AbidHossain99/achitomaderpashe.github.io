<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: homescreen.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Achi Pashe- User Profile</title>
</head>
<body>
  <?php 
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);
    }
  ?>
  <link href="profile_style.css" rel="stylesheet" type="text/css">
  <aside class="profile-card">
    <div class="mask-shadow"></div>
    <header>
  
      <!-- here’s the avatar -->
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
        ?>">
        <img src="php/images/<?php echo $row['img']; ?>" alt="Avatar">
      </a>
  
      <!-- the username -->
      <h1> HI THERE!<br> <?php echo $row['fname'] ." ". $row['lname']; ?> </h1>
  
      <!-- and role or location -->
      <h2>You are a <?php echo $row['user_type'] ?></h2>
  
    </header>
  
    <!-- bit of a bio; who are you? -->
    <div class="profile-bio">
      <p>Address: <?php echo $row['Address'] ?></p>
      <p>Date Of Birth: <?php echo $row['dateofbirth'] ?></p>
      <p>Email: <?php echo $row['email'] ?></p>
      <p>Your Id: <?php echo $row['unique_id'] ?></p>
    </div>
    <!-- some social links to show off -->
    <ul class="profile-social-links">
  
      <!-- twitter - el clásico  -->
      <li>
        <a href="https://twitter.com/tutsplus">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/social-twitter.svg">
        </a>
      </li>
  
      <!-- envato – use this one to link to your marketplace profile -->
      <li>
        <a href="https://facebook.com">
          <img src="data:image/jpeg;base64,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">
        </a>
      </li>
  
      <!-- codepen - your codepen profile-->
      <li>
        <a href="https://twitter.com">
          <img src="data:image/jpeg;base64,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r3SeLpM50ng6R00PmjXOk8LEmwdJ4OkfNFiaNbZXMaxJs7EmNYkdNFmLNTdVMcjKbSyuYltUsRZai9+BjgysowygGWJo7Ul2crLZvtWtWbsY2e2ugHw7SNnSqj5x9Q9UfNFTNU45d29kjH0BoW3GW8hNiDIu5HgovOec8w4yXtFaOqw1S01DJV4n5TNxZjxJjRejasNUKqV5KjaeLM3FmPEzLjdzyWt1j1FbLhK5L1fouz5iIicKIiIgAiIgAiIgAiIgAiIgBWazGaLDba8lPi8D1c02URWbDGWera3/AL2E4yVD3lnLW1MhyYEHp/5tnmyzq7K1YZMARzETXYjRCnajcnoO31zGzdF5J443uvk/x9jQx6yX73A550ng6Tb36OtXepI5x4QmBYkouaxva014l7HkVcnuYDpMd0mwdJjuknNFmaNe6THsSbF0mO6R80PmjXWVzFsrm0euZGG1fxV3yKWA8ZxyF68239kfDdcFxHvNMLensvjwOZtqnlhsHZY4rqQ2MdyojM3/AK6ZI+j9RF2HE25/Vq2Dtc/oBOrwGjqcOvJprWsceSPCbpJ3ntl/Hhv/AG4FPN07ixrbGuu/kv58vmcXq5qDllZjSDuIpQ+D99h+Q887uqtVUKqhVUZKqgBQOYAbpdEtqUuR5zU6vLqa62R+XYvBCIidKwiIgAiIgAiIgAiIgAiIgAiIgAiIgAiIgAlllSt8pQ3WAZfEHx4MDDfRlB31jsJH5TxbQWHPBh1OZsoiXp8T/wBF8kNWfIuVP5s1f7Aw3EOfvmeiaCwo/pA+UWb8zNhE6sGJcoXyR16jK+dv5s8acLWnyK608lVBntERqW3BCW23uxERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERABERAD//2Q==">
        </a>
      </li>
  
      <!-- add or remove social profiles as you see fit -->
      <div class="profile-bio">
        <p>**Want to go back?**</p>
        <p>**Tap your Profile Picture**</p>
      </div>
  
    </ul>
  
  </aside>
  <title>Achi Pashe</title>
</body>
</html>
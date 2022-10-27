<?php 

session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
  header("location: homescreen.php");
}

$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}

$cardholderb = $_POST['cardholderb'];
$cardnumberb = $_POST['cardnumberb'];
$Amount = $_POST['Amount'];
$report = $_POST['report'];
$unique_id= $_POST['unique_id'];
if(isset($_POST['submit'])){
    $qry= "INSERT INTO `report_table`(`Email Address`, `First_Name`, `Last_Name`, `Report`, `user_u_id`) VALUES ('$cardholderb','$cardnumberb','$Amount','$report','$unique_id')";
    $insert = mysqli_query($conn,$qry);
    if(!$insert){
        echo "Hoy nai";
        
    }
    else{
            header("location:report_com.php");
            }
}
if(isset($_POST['back'])){
    if ($row['user_type'] === 'user'){
        header("location:homescreen_user.php");
    }
    elseif ($row['user_type'] === 'volunteer'){
        header("location:homescreen_volun.php");
    }
    elseif ($row['user_type'] === 'specialist'){
        header("location:homescreen_spec.php");
    }
    elseif ($row['user_type'] === 'admin'){
        header("location:homescreen_admin.php");
    }
}
    

?>
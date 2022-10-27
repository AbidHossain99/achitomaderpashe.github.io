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
$type = $_POST['type'];
$cardholderb = $_POST['cardholderb'];
$cardnumberb = $_POST['cardnumberb'];
$Amount = $_POST['Amount'];
$date = $_POST['date'];
if(isset($_POST['submit'])){
    $qry= "INSERT INTO `payment_table`(`Payment Option`, `Name`, `Phone_no` ,`Amount`, `Date`) VALUES ('$type','$cardholderb','$cardnumberb','$Amount','$date')";
    $insert = mysqli_query($conn,$qry);
    if(!$insert){
        echo "Payment Incomplete";
    }
    else{
        header("location: conf_payment.php");
        //echo "Payment Done.";
    }
 }
if(isset($_POST['paylater'])){
    $sql= "INSERT INTO `paylater_table`(`Payment Option`, `Name`, `Phone_no` ,`Amount`, `Start_date`) VALUES ('$type','$cardholderb','$cardnumberb','$Amount','$date')";
    $insert2 = mysqli_query($conn,$sql);
    if(!$insert2){
        echo "Payment Incomplete";
        
    }
    else{
        header("location: conf_paylater.php");
        //echo " You have to pay within 1 month. ";
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
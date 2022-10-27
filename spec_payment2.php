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
$U_id = $_POST['U_id'];
$Amount = $_POST['Amount'];
$date = $_POST['date'];
if(isset($_POST['submit'])){
    $qry= "INSERT INTO `spec_payment_table`(`Payment Option`, `Admin Name`, `S_Unique_id` ,`Amount`, `Date`) VALUES ('$type','$cardholderb','$U_id','$Amount','$date')";
    $insert = mysqli_query($conn,$qry);
    if(!$insert){
        echo "Payment Incomplete";
    }
    else{
        header("location: paymenthistory.php");
        //echo "Payment Done.";
    }
 }

if(isset($_POST['back'])){
    header("location: paymenthistory.php");
}
?>
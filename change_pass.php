<?php
    session_start();
    include_once "php/config.php";
    $new_email = mysqli_real_escape_string($conn, $_POST['new_email']);
    $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
    if(isset($_POST['submit'])){
        if(!empty($new_email) && !empty($new_pass)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE 'email' = '{$new_email}'");
            //echo "$sql";
            $row = mysqli_fetch_assoc($sql);
            $encrypt_pass = md5($new_pass);
            echo "$new_email";
            $sql2 = mysqli_query($conn, "UPDATE users SET `password` ='[$new_pass]' WHERE 'email'='[$new_email]'");
            header("location:login.php");
        }
        else{
            echo "Bhule pass diso";
        }
    }
    if (isset($_POST['back'])){
        header("location:login.php");
    }
?>
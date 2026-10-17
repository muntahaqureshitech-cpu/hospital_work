<?php
session_start();
require_once "master/connect.php";

 echo $_SERVER["REQUEST_METHOD"];
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
     if($user_email == "admin@gmail.com" && $user_password == "admin123"){
        $_SESSION["admin"] = $user_email;
        echo "<script>window.location = 'admin/';</script>";
        echo "<script>window.location = 'login.php';</script>";
     }
 }

else{
    echo "<script>alert('Invalid Email or Password');</script>";
    echo "<script>window.location = 'login.php';</script>";
 }
 ?>
<?php
require_once "master/connection.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctor_name = $_POST["doctor_name"];
    $doctor_email = $_POST["doctor_email"];
    $doctor_phone = $_POST["doctor_phone"];
    $doctor_password = $_POST["doctor_password"];
    $doctor_education = $_POST["doctor_education"];
    $doctor_sp = $_POST["doctor_sp"];
    $doctor_image = $_FILES["doctor_image"]["name"];
    $imageName =  'images/' .rand(0000001, 9999999).$doctor_image;
    $tmp_name = $_FILES["doctor_image"]["tmp_name"];

    $query = "INSERT INTO doctor_add(doctor_name, doctor_email, doctor_phone, doctor_password, doctor_education, doctor_specialist,doctor_image) VALUES  ('$doctor_name','$doctor_email','$doctor_phone','$doctor_password','$doctor_education','$doctor_sp','$imageName')";
      $ins=mysqli_query($con, $query);
     if($ins){
       $upload = move_uploaded_file($tmp_name, $imageName);
       if($upload){
        echo "<script>alert('Doctor Added Successfully');</script>";
        echo "<script>window.location.href='dr_add.php';</script>";
       }
        else{
        echo "<script>alert('Doctor Not Added');</script>";
        echo "<script>window.location.href='dr_add.php';</script>";
       }
        
    }
    else{
        echo "<script>alert('Something Went Wrong');</script>";
        echo "<script>window.location.href='dr_add.php';</script>";
    }
}
else{
    echo "<script>alert('Something Went Wrong');</script>";
    echo "<script>window.location.href='dr_add.php';</script>";
}
?>
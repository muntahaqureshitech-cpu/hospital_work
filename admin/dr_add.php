<?php 
require_once "master/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
      require_once "master/linkcss.php";
    ?>
</head>
<body>
    <?php 
     require_once "master/header.php";
    ?>
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-2">
                 <?php 
              require_once "master/side_nav.php";
            ?>
            </div>
            <div class="col-lg-10">
                 <div class="card p-3 my-3">
                 <h1 class="my-3">Add Doctor</h1>
                 <form action="dr_register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="doctor_name" class="form-control my-2" placeholder="Enter Doctor Name" required>
                    <input type="email" name="doctor_email" class="form-control my-2" placeholder="Enter Doctor Email" required>
                    <input type="number" name="doctor_phone" class="form-control my-2" placeholder="Enter Doctor Phone" required>
                    <input type="password" name="doctor_password" class="form-control my-2" placeholder="Enter Doctor Password" required>
                    <input type="text" name="doctor_education" class="form-control my-2  " placeholder="Enter Doctor Education" required>
                    <input type="text" name="doctor_specialization" class="form-control my-2  " placeholder="Enter Doctor Specialization" required>
                    <input type="file" name="doctor_image" class="form-control my-2  " placeholder="Enter Doctor Image" required>
                    <input type="submit" name="submit" class="btn btn-primary my-2" value="Add Doctor">
                    </form>
                 </div> 
                 </div>
                 </body>
                 </html>
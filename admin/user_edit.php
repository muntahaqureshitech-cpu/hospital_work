<?php 
$edit_id = $_GET["id"];
require_once "master/connection.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
     $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $user_phone = $_POST["user_phone"];
    $user_password = $_POST["user_password"];

    $query = "update user_register set user_name = '$user_name',user_email ='$user_email',user_phone = '$user_phone',user_password='$user_password' where user_id = '$edit_id'";
    $edit = mysqli_query($con,$query);
    if($edit){
  echo "<script>alert('User Edit');</script>";
    echo "<script>window.location='select.php';</script>";  
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-5 mx-auto">
             <h1>User Edit</h1>    
                <form method="post">
                    <?php 
                     $query = "select * from user_register where user_id = '$edit_id'";
                     $sel = mysqli_query($con, $query);
                     while($row = mysqli_fetch_assoc($sel)){
                      
                    ?>
                   <input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" placeholder="Name" class="form-control my-3">
                   <input type="email" name="user_email" value="<?php echo $row['user_email']; ?>" placeholder="Email" class="form-control my-3">
                   <input type="number" name="user_phone" value="<?php echo $row['user_phone']; ?>" placeholder="Phone" class="form-control my-3">
                   <input type="text" name="user_password" value="<?php echo $row['user_password']; ?>" placeholder="Password" class="form-control my-3">
                   <input type="submit" value="Save Changes" class="btn btn-info">
                   <?php 
                     }
                   ?>
                </form>
            </div>
        </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
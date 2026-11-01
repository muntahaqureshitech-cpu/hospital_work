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
            <div class="col-lg-3">
                 <?php 
              require_once "master/side_nav.php";
            ?>
            </div>
            <div class="col-lg-9">
                 <h1 class="my-3">User Details</h1>

<div class="table-responsive">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     $query = "select * from user_register";
     $sel = mysqli_query($con,$query);
     while($row = mysqli_fetch_assoc($sel)){
    ?>
    <tr>
      <th scope="row"><?php echo $row["user_id"]; ?></th>
      <td><?php echo $row["user_name"]; ?></td>
      <td><?php echo $row["user_email"]; ?></td>
      <td><?php echo $row["user_phone"]; ?></td>
      <td><?php echo $row["user_password"]; ?></td>
      <td>
         <a href="delete.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-danger">Delete</a>
         <a href="edit.php?id=<?php echo $row["user_id"]; ?>" class="btn btn-primary">Edit</a>
      </td>
    </tr>
  <?php 
     }
  ?>
  </tbody>
</table>
                 </div>
            </div>
        </div>
    </div>
    


    <?php 
     require_once "master/linkjs.php";
    ?>
</body>
</html>
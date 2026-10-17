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
            <h1 class = "my-3">DOCTOR LIST</h1>
<div class="table-rsponsive">
                <table class = "table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Education</th>
      <th scope="col">Specialist</th>
      <th scope="col">Description</th>
      <th scope="col">Days</th>
      <th scope="col">Timing</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  <?php
    $query = "select * from doctor_add";
    $sel = mysqli_query($con,$query);
    while($row = myaqli_fetch_assoc($sel)){
   ?>
    <tr>
       <th scope="row"><?php echo $row["doctor_id"];?></th>
        <td><?php echo $row["doctor_name"];?></td>
        <td><?php echo $row["doctor_email"];?></td>
        <td><?php echo $row["doctor_phone"];?></td>
        <td><?php echo $row["doctor_education"];?></td>
        <td><?php echo $row["doctor_specialist"];?></td>
        <td><?php echo $row["doctor_description"];?></td>
        <td><?php echo $row["doctor_days"];?></td>
        <td><?php echo $row["doctor_timing"];?></td>
        <td><img src="<?php echo $row["doctor_img"]; ?>" class = "img_fluid"/><td>
        <td><p><?php
            if($row["doctor_status"]==1){
                echo "Active";
            }?></p>
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
</div>

<?php
require_once"master/linkjs.php"
?>

</body>
</html>
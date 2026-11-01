<?php
$delete_id = $_GET["id"];
require_once "master/connection.php";

$query = "delete from doctor_add where doctor_id = '$delete_id'";
$delete = mysqli_query($con,$query);
if($delete) {
 echo "<script>alert('Record Deleted Successfully');</script>";
 echo "<script>window.location='doctor_view.php';</script>";
}
?>
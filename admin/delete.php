<?php
$delete_id = $_GET["id"];
require_once "master/connection.php";

$query = "delete from hospital_new  where id = '$delete_id'";
$delete = mysqli_query($con,$query);
if($delete) {
 echo "<script>alert('Record Deleted Successfully');</script>";
 echo "<script>window.location='user.php';</script>";
}
?>
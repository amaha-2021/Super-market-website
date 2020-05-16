<?php
include "includes/common.php";
$PRICE=$_GET['price'];
$email=$_SESSION['email_id'];

$query = "DELETE FROM `user_cart` WHERE `User_id`='$email'";
$result = mysqli_query($con,$query) or die(msqli_error($con));
header("location:success.php");
?>
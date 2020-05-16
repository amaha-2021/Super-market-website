<?php
include "includes/common.php";
$product_id=(int)$_GET['id'];
$email=$_SESSION['email_id'];

$query="SELECT `User_id`, `Product_id` FROM `user_cart` WHERE User_id='$email' and Product_id=$product_id";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==1)
{	
	header("location:cart.php");
}
 else
 {
 	$query1="INSERT INTO `user_cart`(`User_id`, `Product_id`) VALUES ('$email','$product_id')";
 	$result = mysqli_query($con,$query1) or die(mysqli_error($con));
 	header("location:products.php");


 }
?>
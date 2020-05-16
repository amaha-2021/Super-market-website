<?php
include "includes/common.php";

$_SESSION['user_id']=$_POST['e-mail'];
$F_name=$_POST['F_name'];
$L_name=$_POST['L_name'];
$email=$_POST['e-mail'];
$passward=$_POST['passward'];
$contact = $_POST['contact'];
$address=$_POST['address'];

$select_query="SELECT `user_id` FROM `users_data_base` WHERE user_id='$email'";
$select_query_result=mysqli_query($con,$select_query) or die(mysqli_error($con));
$rows=mysqli_num_rows($select_query_result) or die(mysqli_error($con));
if($rows>=1)
{
	echo "<center><h1> E-mail ID is already exists please try other email</h1></center>";
	echo"<form action='signup.php' method='POST'>
								<center><button type='submit' name='submit'   class='btn btn-primary'class = 'glyphicon glyphicon-shopping-cart'>sign up</button></center>
							</form>";
}
else
{
	echo "done";
// $query="INSERT INTO `users_data_base`(`user_id`, `password`, `first_name`, `last_name`, `Mobile_number`, `address`) VALUES ('$email,'$passward','F_name','L_name','$contact','$address')";
// $result=mysqli_query($con,$query) or(die(mysqli_error($con)));
// header("location:products.php");
}
?>
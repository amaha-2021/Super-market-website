<?php
include  "includes/common.php";
$_SESSION['email_id']=$_POST['e-mail'];
$_SESSION['password']=$_POST['password'];

$email_id=$_POST['e-mail'];
$password = $_POST['password'];

$query="SELECT `user_id`, `password` FROM `users_data_base` WHERE user_id='$email_id'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));

$rows=mysqli_fetch_array($result);
if(($rows[0]==$email_id)&& ($rows[1]==$password))
{
	header("location:products.php");
}
else
{
	echo "<center><h1>login Credential doesn't match please try again<h1></center>";
}
?>
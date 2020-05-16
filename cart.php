<?php
include "includes/common.php";
$email=$_SESSION['email_id'];
$query = "SELECT `Product_id` from user_cart where User_id='$email'";
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$sum=0;
$array=[];

while($row=mysqli_fetch_array($result))
{
    array_push($array,$row[0]);
} 
$i=0;
while($i<count($array))
{
    $query="SELECT `price` from `super_market_product` where id=$array[$i]";
    $result=mysqli_query($con,$query);
    $rows=mysqli_fetch_array($result);
    $sum=$sum+$rows[0];
    $i=$i+1;
 }

header("location:final_cart.php?pid=$sum");
?>
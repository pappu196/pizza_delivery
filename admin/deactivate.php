<?php 
include("connect.php");
$id=$_GET['id'];



$sql="UPDATE pizza_order SET status='0' WHERE id='$id'";
	$qry=mysqli_query($con,$sql);
	
	header("location:order_view.php");
?>
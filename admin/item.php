<?php 
if(isset($_GET['submit'])){
	$name=$_GET['name'];
	$price=$_GET['price'];
	$pic=$_GET['pic'];
	
	 $host="localhost";
	 $user="root";
	 $pass="";
	 $db="pizza";
	$con=mysqli_connect( $host,$user, $pass,$db) or die(mysqli_error($con));
	$sql="INSERT INTO pizza values('0','$name','price','$pic','0')";
<?php
include('connect.php');
$ph=$_POST['phone'];
$sql="SELECT * FROM users WHERE phone='$ph'";
$qry=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($qry);
if($cnt>0){
	return 0;
}else{
	echo "valid";
}




?>
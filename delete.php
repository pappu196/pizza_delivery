<?php 
include("connect.php");
$id=$_GET['id'];



$sql="DELETE FROM users  WHERE id='$id'";
	$qry=mysqli_query($con,$sql);
	?>
	<script type="text/javascript">
	alert('your account is deactivate');
	window.location.href="logout.php";
</script>
<?php
include('connect.php');
$mail=$_SESSION['email'];
$sql="SELECT name FROM users WHERE email='$mail'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$name=$row['name'];

$sql="SELECT * FROM pizza_order WHERE cus_name='$name'";
$qry=mysqli_query($con,$sql);
$cnt=mysqli_num_rows($qry);
if($cnt>0){
	header("Location:bil_view.php");
}else{ ?>
	<script type="text/javascript">
	alert('please order pizza first');
	window.location.href="index.php";
</script>
<?php }

 ?>

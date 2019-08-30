<?php 
include("connect.php");
$id=$_GET['id'];



$sql="DELETE FROM item  WHERE id='$id'";
	$qry=mysqli_query($con,$sql);
	?>
	<script type="text/javascript">
	alert('product is deleted');
	window.location.href="item_view.php";
</script>
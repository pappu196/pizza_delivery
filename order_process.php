<?php
include('connect.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$pizza=$_POST['pizza'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	
	$sql="INSERT INTO pizza_order VALUES('0','$name','$phone','$pizza','$price','$qty','$address','0')";
	$qry=mysqli_query($con,$sql);
	if($qry){?>
		<script type="text/javascript">
	alert('your order placed sucessfully');
	window.location.href="bil_view.php";
</script>
		
	<?php }else{
		echo "data not inserted".mysqli_error($con);
	}
}

?>
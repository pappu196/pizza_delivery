<?php 
include('connect.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$address=$_POST['address'];


	$target="profile/";
$file=$_FILES['pic']['name'];
$size=$_FILES['pic']['size'];
$type=$_FILES['pic']['type'];

$filename=$target.basename($file);
	

	$sql="INSERT INTO users values('0','$name','$phone','$email','$password','$address','0','$filename')";
	

	$qry=mysqli_query($con,$sql);
	$upload=move_uploaded_file($_FILES['pic']['tmp_name'], $filename);
	if($qry){ ?>

<script type="text/javascript">
	alert("you are successfully registerd");
	window.location.href="form_view.php";
</script>
	<?php	
	}else{
		echo "data not inserted".mysqli_error($con);
	}
}

?>
?>
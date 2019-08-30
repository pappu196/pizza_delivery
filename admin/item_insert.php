<?php 
include('connect.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$price=$_POST['price'];

	$target="../img/";
$file=$_FILES['pic']['name'];
$size=$_FILES['pic']['size'];
$type=$_FILES['pic']['type'];

$filename=$target.basename($file);
	

	$sql="INSERT INTO item values('0','$name','$price','$filename','0')";
	

	$qry=mysqli_query($con,$sql);
	$upload=move_uploaded_file($_FILES['pic']['tmp_name'], $filename);
	if($qry){
		echo "data inserted";
		header("Location:item_view.php");

	
	}else{
		echo "data not inserted".mysqli_error($con);
	}
}

?>
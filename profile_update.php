<?php 
include("connect.php");
if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	$sql="SELECT name FROM users WHERE email='$email'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$name=$row['name'];
	$sql="SELECT * FROM users WHERE cus_name='$name'  ORDER BY id DESC limit 1";
?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<table align="center" border="1">
		<tr>
		<th> name</th>
		<th>number</th>
		<th>email</th>
		<th>employee address</th>
		<th>employee status</th>

		<th>deactivate account</th>
		<th>update</th>
		</tr>

	<?php 
	while($row=mysqli_fetch_array($qry))
	 { ?>
	<tr>
			<td><?php echo $row['name'];?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['address'] ?></td>
			
		</table></body></html>
	
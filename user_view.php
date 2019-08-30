<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body><table align="center" border="1">
		<tr>
		<th>id</th>
		<th>name</th>
		<th>phone</th>
		<th>email</th>
		<th>password</th>
		<th>address</th>
		<th>status</th>
	</tr>
<?php 
	$sql="SELECT * FROM users";
	$qry=mysqli_query($con,$sql);
	$sl=1;
	while($row=mysqli_fetch_array($qry))
	 { ?>
	<tr>
			<td><?php echo $sl; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['password']; ?></td>
			<td><?php echo $row['address']; ?></td>
			<td><?php echo $row['status']; ?></td>
		
		</tr>

		<?php 
		$sl++;
	}
		
		?>
		


	
</table>
</body>
</html>
<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>item view</title>
	<style type="text/css">
	body{
		background-color: #ddd;
		text-align: center;
	 text-transform: capitalize;
	}
		table{
			width:600px;
			height:130px;
			border-collapse: collapse;
  			box-shadow: 0px 0px 7px #323232;
  			background-color: #fff;
  			font-size: 15px;
  			font-family: verdana;
		}
		th{
			color:#ff7f24;
		}
		.menu{
    text-align: left;
    margin-left:  30px;
    padding-top:20px;
    font-size: 30px;
}

	</style>

</head>
<body>
<table align="center" border="1">
		<tr>
		<th> id</th>
		<th> name</th>
		<th>price</th>
		<th>picture</th>
		<th>status</th>
		<th>delete</th>
		</tr>

	<?php 
	$sql="SELECT * FROM item";
	$qry=mysqli_query($con,$sql);
	$sl=1;
	while($row=mysqli_fetch_array($qry))
	 { 
	 	 	$pic=$row['picture'];
	 	?>
	<tr>
			<td><?php echo $sl; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['price']; ?></td>

			<td><center><img id="picture" src="<?php echo $pic; ?>" width="120px" height=80px></center></td>

			<td><?php echo $row['status']; ?></td>
			<td><a id="delete" href="delete.php?id=<?php echo $row['id'] ?>">deactivate</a></td>

		<?php 
		$sl++;
	}
		
		?>
		


	</tr>
</table>
</body>
</html>
<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order View</title>
	<style type="text/css">
	body{
		background-color: #ddd;
		text-align: center;
	 text-transform: capitalize;
	}
		table{
			width:100%;
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
		<th>customer name</th>
		<th>customer phone</th>
		<th>pizza item</th>
		<th>pizza price</th>
		<th>pizza quantity</th>
		<th>delivery address</th>
		<th>status</th>
		</tr>

	<?php 
	$sql="SELECT * FROM pizza_order WHERE status='0' ";
	$qry=mysqli_query($con,$sql);
	$sl=1;
	while($row=mysqli_fetch_array($qry))
	 { ?>
	<tr>
			<td><?php echo $sl; ?></td>
			<td><?php echo $row['cus_name']; ?></td>
			<td><?php echo $row['phone']; ?></td>
			<td><?php echo $row['pizza_item']; ?></td>
			<td><?php echo $row['pizza_price']; ?></td>
		<td><?php echo $row['pizza_qty']; ?></td>
				<td><?php echo $row['delivery_address']; ?></td>
				
							<?php if($row['status']=='0'){ ?>
			<td>
				<a href="activate.php?id=<?php echo $row['id'] ?>">Grant for delivery</a>
			 <?php }else{ ?>
			</td>
			<td>
				<a href="deactivate.php?id=<?php echo $row['id'] ?>">deactivate</a>
			</td>
			<?php } ?>
		<?php 
		$sl++;
	}
		
		?>
		


	
</table>
</body>
</html>
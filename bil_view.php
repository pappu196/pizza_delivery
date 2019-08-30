<?php 
include("connect.php");
if(isset($_SESSION['email'])){
	$email=$_SESSION['email'];
	$sql="SELECT phone FROM users WHERE email='$email'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$phone=$row['phone'];
	$sql="SELECT * FROM pizza_order WHERE phone='$phone'  ORDER BY id DESC limit 1";

$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$price=$row['pizza_price'];
$quantity=$row['pizza_qty'];
$total=$price*$quantity;
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Bill View</title>
	<style type="text/css">
	body{
		background-color: #ddd;
	}
		table{
			width:400px;
			height:400px;
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
	<div class="menu">
    <a href="index.php" style="color: black;"> HOME</h4></a>
</div>
<table align="center" border="1">
			
	<tr>
		<th>customer name</th>
		<td><?php echo $row['cus_name']; ?></td>
	</tr>
	<tr>
		<th>customer phone</th>
		<td><?php echo $row['phone']; ?></td>
	</tr>
	<tr>
		<th>pizza item</th>
		<td><?php echo $row['pizza_item']; ?></td>
	</tr>
	<tr>
		<th>pizza price</th>
		<td><?php echo $row['pizza_price']; ?></td>
	</tr>
	<tr>
		<th>pizza quantity</th>
		<td><?php echo $row['pizza_qty']; ?></td>
	</tr>
	<tr>
		<th>delivery address</th>
		<td><?php echo $row['delivery_address']; ?></td>
	</tr>
	<tr><th>Total</th>
		<td><?php echo $total; ?></td>
	</tr>
<tr>
	<th>status</th>
<?php if($row['status']=='0'){ ?>

			<td>
				order processing
			</td>
			 <?php }else{ ?>
			<td>
			out of delivery
			</td>
				<?php } ?>
		</tr>
	</table>
	<center>
<button onclick="myfuction()">Print This Bill</button>
<script type="text/javascript">
	function myfuction() {
		window.print();
		// body...
	}
</script>
	
</center>	
</body>
</html>
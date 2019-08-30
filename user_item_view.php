<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>item view</title>
<style type="text/css">
body{
	font-family: verdana;
text-transform: capitalize;
}
	h2{
	text-align: center;
	color:#010e23;
	font-family:sans-serif;
	background-color:#1785b5;
	padding:0;
	margin:0;
	height:40px;
	padding-top:10px; 

}

#one{
	width:100% ;
	height:768px;;
	background-repeat:no-repeat;
	background-size: cover;
	
}

		.item_view{
	width: 300px;
	height: 230px;
	display: inline-block;

	padding: 3px 6px;
	margin: 3px 6px;
	
}
img{
	align-content: center;
	margin-left: 25px;
	margin-top: -10px;
	border-radius: 10px;
	box-shadow:0px 0px 5px #323232;

}
.btn{
	width: 100px;
	display: block;
	padding: 10px 25px;
	text-align: center;
	color: #e6efee;
	font-size: 20px;
	margin: 30px 5px;
	text-decoration: none;
	background-color:#1785b5;
	margin-left: 75px;
	border-radius: 10px;
}
.btn:hover{
	box-shadow:0px 0px 10px #323232;
}
p{
	font-size: 20px;
	margin-top: -3px;
	text-align: center;
	color: #0d719b;
}
h3{
	color:#010e23;
	margin-top:0px;
	
}
</style>	
</head>
<body bgcolor="#c2e2ef">
	<h2>PIZZA'S MENU</h2><br>
	<div id="one">

<?php 
	$sql="SELECT * FROM item";
	$qry=mysqli_query($con,$sql);
	$sl=1;
	while($row=mysqli_fetch_array($qry))
	 {
	 	$price=$row['picture'];
	 	$pic=substr($price, 3);
	  ?>
<div class="item_view">
	<h3><center><?php echo $row['name']; ?></center></h3>
	<img id="picture" src="<?php echo $pic; ?>" width="250px" height=180px>
	<p>Rs. <?php echo $row['price']; ?></p>
	
	<a href="order_form.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>&price=<?php echo $row['price'] ?>" class="btn">Order</a>
	<hr>
</div>
<?php } ?>
	</div>
</body>
</html>
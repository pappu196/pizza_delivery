<?php
include('connect.php');
$email=0;
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
}
$sql="SELECT name FROM users WHERE email='$email'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$name=$row['name'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
*{
	padding: 0;
	margin:0;
}
body{
	padding:0;
	margin:0;
	background-color:#ddd;
	background-image:url('Deliciouspizza-image-1024x640.jpg');
	background-size: cover;
	background-position: cover;
	font-family: verdana;
	font-size:20px;
	background-repeat: no-repeat;;

}
.pizza{
	text-decoration: none;
	font-size: 35px;
	font-weight:bold;
	color:#403431;
	padding-left:17px;
	
}
.navbar{
	
	padding:0;
	margin:0px;
	width:100%;
	height:50px;
	background-color:#ff7f24;
	text-overflow: ellipsis;
	overflow: hidden;
}
.set1{
	float: left;

	
}
.set2{
	float: right;
}
.navbar ul{
	padding: 0;
	margin:0;
	list-style: none;
	font-size: 25px;
	float:right;
	margin-top:10px;
}
.navbar ul li{
	display:inline-block;
	margin-right:40px;
	width:110px;
	height:70px;
	text-align:center;
	color:#fff;
	border-radius: 3px;

} 
.navbar ul li:hover{
	border-bottom: 3px solid red;
	background-color:#ffa324;
	color:#4c50e0;
	margin-top:-15px;

}
.navbar ul li a{
	text-decoration:none;
	color:#403431;
	text-align: center;
	margin-top: 30px;
}
#order{
	color: white;
}
#home{
	margin-right: 12px;
	padding-right: -25px;

}

	</style>



</head>
<body>
	<div class="navbar">
		<div class="set1">
		<a class="pizza" href="form2.php">P!ZZA</a>
		<ul >
			<li id="home"><a href="index.php">Home</a></li>
	<li><a href="user_item2view.php" class="menu">MENU</a></li>
			<li><a href="#">Contact</a></li>
	</ul>
	</div>

		<div class="set2"><ul>
			<li> <?php if(isset($_SESSION['email'])){ ?>
   	 <a href="#" style="overflow: hidden;">profile</a>
      
      <?php }else{ ?>
      <a href="user_register2.php" >Sign up</a>
      <?php } ?></li>
      
			 <?php if(!isset($_SESSION['email'])){ ?> 

   <li> <a href="user_login_page.php" >log in</a>
      <?php }else{ ?>
     <li> <a href="logout.php" >Log out</a></li>
      <?php } ?></li>

     <li><a href="bill_view_process.php">Status</a></li>
		</ul>
	</div>
</div>






	<?php 
	$sql="SELECT * FROM pizza_order WHERE cus_name='$name' order by id DESC LIMIT 1";
	$qry=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($qry);
    if($row['status']=='1'){ ?>
	<marquee id="order">your order is out of delivery</marquee>
	<?php  }  ?>


</body>
</html>
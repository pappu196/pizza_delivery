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
	background-image:url('back/cool_back.jpg');
	background-position:cover;
	background-size: cover;
	font-family: verdana;
	font-size:20px;
	background-repeat:no-repeat;
	text-transform:capitalize;
}
.pizza{
	text-decoration: none;
	font-size: 35px;
	font-weight:bold;
	color:white;
	padding-left:17px;
	opacity: .8;
	
}
.navbar{
	
	padding:0;
	margin:0px;
	width:100%;
	height:50px;
	background-color:transparent;
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
	width:150px;
	text-align:center;
	color:#fff;
	border-radius: 3px;

} 
.navbar ul li:hover{
	border-bottom: 3px solid #1785b5;
	background-color:#1ca59e;
	color:#fff;
	margin-top:-15px;
	border-radius:10px

}
.navbar ul li a{
	text-decoration:none;
	color:white;
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
#profile{
	color: white;
text-align: center; 
}
#demo{
	margin-right: 20px;
	margin-top: 11%;
	color:white;
	padding-left: 20px;
	opacity: .8;
}
#hot
{
	margin-top:20px;
}
#welcome{
	width:300px;
	height:100px;
	position:absolute;
	top:70px;
	left:155px;

}
	</style>




</head>
<body>

	<div class="navbar">

		<div class="set1">
		<ul >
			<li id="home"><a href="index.php">Home</a></li>
	<li><a href="user_item_view.php" class="menu">Menu</a></li>
			<li><a href="contact_us.php">Contact Us</a></li>
			<li><a href="about.php">About Us</a></li>
	</ul>
	</div>
		<div class="set2"><ul>
			<li> <?php if(isset($_SESSION['email'])){ ?>
   	 <a href="Profile.php" style="overflow: hidden;">Profile</a>
      
      <?php }else{ ?>
      <a href="user_register.php" >Sign up</a>
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
	<hr>
 <?php if(isset($_SESSION['email'])){ ?>
   	<h4 style="color:" id="profile">
Welcome <?php echo $name; ?></h4>
   	 	<?php } ?>

   	<img id="welcome" src="image/logo/welcomelogo.png"> <center><img id="hot" src="image/logo/logo.png"></center>


<h4 id="demo"><?php
echo "Today is " . date("d/m/Y") . "<br>";
?></h4>


</body>
</html>
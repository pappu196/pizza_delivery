<?php 
include("connect.php");
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>item view</title>
	<style type="text/css">
body{
    padding:0;
    margin:0;
    background-image:url('image/back2.jpg');
    background-size:cover;
    background-position:cover; 
    text-transform:capitalize; 
    font-family:sans-serif;
}

table{
			width:500px;
			height:300px;
			border-collapse: collapse;
  			background-color: #fff;
  			font-size: 15px;
  			font-family: verdana;
  			margin-left:10px;
  			margin-top:-150px;
  			background:transparent;
}
th{
			color:#ff7f24;
}
.menu{
    text-align: left;
    margin-left:  40px;
    padding-top:30px;
    font-size: 30px;
}
#delete{
	float:right;
	margin-top: -400px;
	text-decoration: none;
	margin-right: 50px;
	color: white;
	font-family: sans-serif;
	font-weight: bold;
	text-shadow: 2px 2px 2px #323232;
}
#picture{
	margin-top: -70px;
	border-radius: 50%;
}

</style>
</head>
<body>

	<div class="menu">
    <a href="form.php" style="color:#2a3692;"> HOME</h4></a>
<h2 style="text-align: center; text-decoration: underline; color:#5f3e3b;font-family: sans-serif;
	">Profile</h2>

<?php 
	$sql="SELECT * FROM users WHERE email='$email' order by id DESC LIMIT 1";
	$qry=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($qry))
	 { 
	$pic=$row['pic'];
	 	?>
	<img id="picture" src="<?php echo $pic; ?>" width="200px" height=180px>

<h2 style="height:250px; color: #5f3e3b; font-family: sans-serif;"><?php echo $row['name']; ?></h2>
<a id="delete" href="delete.php?id=<?php echo $row['id'] ?>">deactivate</a>
<table>
	</div>
	
		<tr>
        <th>phone no</th>
        <th>:</th>
			<td><?php echo $row['phone']; ?></td>
		</tr>
		<tr>
			<th>email</th>
			<th>:</th>
			<td><?php echo $row['email']; ?></td>
		</tr>
		<tr>
		<th>address</th>
		<th>:</th>
			<td><?php echo $row['address']; ?></td>

</tr>

		<?php 
}
	}
		
		?>
		

	
</table>
</body>
</html>
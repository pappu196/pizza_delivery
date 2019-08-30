<?php
include('connect.php');
if(isset($_SESSION['email'])){
	?>
<script type="text/javascript">
	alert('Please logout First to register again');
	window.location.href="index.php";
</script>
	<?php
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<style type="text/css">
body{
    padding:0;
    margin:0;
    background-image:url('back/log1.jpg');
    background-size:cover;
    background-position:cover;	
}
.img{
    width:400px;
    height:450px;
    box-shadow: 0px 0px 5px white;
    color: white;  
      background:rgba(0,0,0,0.5);
     margin-top: 50px;

}
#icon{
    width:50px;
    height:50px;
    position:center;
     margin-left:16%;
    box-shadow:2px 5px 10px #323232;
    border-radius:55%;
     margin-top:25px;
}
input[type="submit"]{
    background-color:#0060af;
    margin-left:17px;
    padding-left:5px;
    font-weight:bold;
    font-size:15px;
    border:none;
    margin-top:100px;
    color:white;
}
input[type="submit"]:hover{
    box-shadow:5px 5px 10px #323232;
}
.inp{
    margin-top:70px;
    background-color:none;
  margin-top: 20px;
}
h3{
    text-align: center;
    color:#b3d1e0;
    font-family:verdana;
    padding-top:20px;
    font-size: 30px
}
input{
    width:75%;
    height:45px;
    margin-left:5px;
    margin-top: 40px;
    background: transparent;

    border:none;
    border-bottom:2px solid #00f9ef;
    color:white;
    font-size:20px;
    outline:none;padding-left:10px;

}

.menu{
    text-align: left;
    margin-left:  30px;
    padding-top:20px;
    font-size: 30px;
}
	</style>
}
</head>
<body>
<div class="menu">
    <a href="index.php" style="color: #b3d1e0; font-family: verdana;"> Home</h4></a>
</div>
    <center>
<div class="img">
    	<h3 id="up">User Login</h3>
    <div class="inp">
		<form id="userform"  action="user_login_process_page.php" method="post">
					<input type="email" name="email" placeholder="Enter your valid email" required="required"><br>
	<input type="password" name="password" placeholder="Enter your password" required="required"><br>
	<center>
	<input type="submit" name="login" value="Login">
	</center>
   </form>
</div>
</div>
</body>
</html>
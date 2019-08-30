<?php
include('connect.php');
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";

$qry=mysqli_query($con,$sql);

if($qry){
$result=mysqli_num_rows($qry);
if($result==1){
$_SESSION['email']=$email;
header("Location:index.php");
?>
<script type="text/javascript">
	alert("login successfully");
	window.location.href="index.php";
</script>

<?php
}
else{ ?>
<script type="text/javascript">
	alert("wrong email or password");
	window.location.href="user_login_page.php";
</script>

<?php }

}else{
	echo"error";	
}

}

?>
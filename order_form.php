<?php
include("connect.php");
if(isset($_SESSION['email'])){
$email=$_SESSION['email'];
$sql="SELECT name,phone FROM users WHERE email='$email'";
$qry=mysqli_query($con,$sql);
$row=mysqli_fetch_array($qry);
$name=$row['name'];
$phone=$row['phone'];
$price=$_GET['price'];
$id=$_GET['id'];
$pizza=$_GET['name'];

}
else { ?>
	<script type="text/javascript">
	alert('you have to login first');
	window.location.href="index.php";
</script>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<style type="text/css">
body{
    padding:0;
    margin:0;
    background-image:url(image/order.jpg);
    background-size:cover;
    background-position:cover;
    font-family:sans-serif;
}
.img{
    margin: 0 auto;
    width:500px;
    height:600px;
    background:rgba(0,0,0,0.5);
    margin-top:90px;
    box-shadow:0px 5px 10px #323232;
}

input{
    width:73%;
    height:40px;
    margin-left:48px;
    margin-top:30px;
    background-color:#fff;
    border:none;
    border-radius:4px;
    padding-left:35px;
    outline:none;
}
input:focus{
    box-shadow:0px 0px 30px #e5291b;
}
input[type="submit"]{
    background-color:#0060af;
    margin-left:-5px;
    padding-left:5px;
    font-weight:bold;
    font-size:15px;
    width:402px;

}
input[type="submit"]:hover{
    box-shadow:0px 0px 10px #323232;
}
.inp{
    padding-top:30px;
    background-color:none;
}
#user{
    top:189px;
    left:527px;
}
#contact{
    top:262px;
    left:527px;
}
#key{
    top:333px;
    left:527px;
}
#address{
    top:405px;
    left:527px;
} 
h3{
    text-align:center;
    color:#b3d1e0;
    padding-top: 15px;
    font-size:25px;
}  
    </style>
</head>
<body>
    <div class="img">
        <h3>Place Your Order</h3>
    <div class="inp">

    	<form id="userform" method="POST" action="order_process.php" enctype="multipart/form-data" >
    	<input type="hidden" name="price" value="<?php echo $price ?>">
        <input type="text" name="name" value="<?php echo $name; ?>" readonly><br>
    	<input type="number" name="phone" value="<?php echo $phone; ?>" readonly><br>
        <input type="text" name="pizza" value="<?php echo $pizza; ?>" readonly>
        <input type="number" name="qty" required="" placeholder="Enter Quentity" autofocus>
    	<input type="textarea" name="address" placeholder="Enter Delevery address" required=""<br>
    	<center><input type="submit" name="submit" value="order now" ></center><br>

    </form>
    </div>
    </div>

</body>
</html>
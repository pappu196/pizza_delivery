<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
body{
	background-color: #ddd;
	text-align: center;
	text-transform: capitalize;
	font-family: verdana;
}
div{
	margin:0 auto;
	background-color: #fff;
	margin-top:100px;
	width:300px;
	height:350px;

}
h3{
	text-align: center;


}
input{
	margin-top:15px;
}
	</style>



</head>
<body>
	<div>
		<h3>ADD ITEM</h3>
		<hr>
		<form method="post" action="item_insert.php" enctype="multipart/form-data"> <br>
			pizza name:<br>
			<input type="text" name="name"><br>
		pizza price:<br>
			<input type="number" name="price"><br>

pizza picture:<br><br>
		

     <input type="file" name="pic" style="padding-left: 80px;" ><br><br>

			<input type="submit" value="submit" name="submit">

		</form>
</div>
</body>
</html>
<?php
include('connect.php');
if(isset($_SESSION['email'])){
    $email=$_POST['email'];
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
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <title>User Register</title>
    <style type="text/css">
body{
    padding:0;
    margin:0;
    background-image:url('back/log.jpg');
    background-size:cover;
    background-position:cover;  
}
.img{
    width:500px;
    height:650px;
    box-shadow: 0px 0px 4px white;
    background:rgba(0,0,0,0.3);
    padding-top: 0px ;
}
#icon{
    width:50px;
    height:50px;
    position:center;
     margin-left:16%;
    box-shadow:0px 5px 10px #323232;
    border-radius:55%;
     margin-top:25px;
}
input[type="submit"]{
    background-color:#0060af;
    margin-left:17px;
    padding-left:1px;
    font-weight:bold;
    font-size:15px;
    border:none;
    margin-top:-70px;
    color:white;

}
input[type="submit"]:hover{
    box-shadow:5px 5px 10px #323232;
}
.inp{
    margin-top:20px;
    background-color:none;
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
    margin-top: 20px;
    background: transparent;

    border:none;
    border-bottom:2px solid #00f9ef;
    color:white;
    font-size:20px;
    outline:none;padding-left:10px;

}
#up{
    padding-top: 50px;
    }
    .menu{
    text-align: left;
    margin-left:  30px;
    padding-top:20px;
    font-size: 30px;
}
#submit{
    color: white;
margin-bottom: 20px;
    }
   h4{
    padding-top: 20px;
    font-size: 25px;
    font-family: sans-serif;
    margin-left: -90px;
   opacity: .9;

   }

    </style>



</head>
<body>
    <div class="menu">
    <a href="index.php" style="color: #b3d1e0; font-family: verdana;"> Home</h4></a>
</div>
    <center>
<div class="img">
        <h3 id="up">Sign up</h3>
    <div class="inp">
       <form id="userform"  method="post" action="user_process.php" enctype="multipart/form-data" >
        

        <input type="text" name="name" placeholder="Enter username" required="">
        <input type="number" name="phone" placeholder="Enter phone number" id="phone" required=""><br> 
        <input type="email" name="email" placeholder="Enter e-mail address" required="">
        <input type="password" name="password" placeholder="Enter password" required=""><br>
        <input type="text" name="address" placeholder="Enter address" required=""><br>

    <a id="upload" style="text-decoration:none; font-size: 25px; color: white; opacity:0.8; margin-top:20px; " href="#" onclick="document.getElementById('fileID').click(); return false;">Upload your Profile Pic</a>

     <input type="file" name="pic" id="fileID" style="visibility: hidden;"  >

    <input type="submit" name="submit" value="Signup" id="submit" required=""><br>

           
    </center>
   </form>
</div>
</div>
<script type="text/javascript">
    $("#phone").blur(function(){
        var ph=document.getElementById("phone").value;
        
        $.ajax({
            url: "checkphone.php",
            type: "post",
            data: {phone:ph},
            success: function(rsponse){
                if(rsponse==0){
                    alert("This phone number is already used");
                    $('#phone').val("");
                    $("#phone").focus();
                }else{
                    return true;
                }
            }
        });
    });
</script>
</body>
</html>
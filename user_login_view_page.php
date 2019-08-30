<?php
include("connection.php");
if(!isset($SESSION['user'])){


?>
<script type="text/javascript">
alert('to view this page you have to login first');
windows.location.href="user_login_page.php";
</script>
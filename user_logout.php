<?php
include('connect.php');
session_unset();
session_destroy();
header("Location:user_login_page.php");
?>
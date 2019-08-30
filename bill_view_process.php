<?php
include('connect.php');
if(isset($_SESSION['email'])){
header("Location:bill_check.php");
}
?>
else <?php { ?>
<script type="text/javascript">
	alert('Please log in First to order pizza');
	window.location.href="index.php";
</script>
<?php } ?>
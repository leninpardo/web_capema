<?php
	session_start();
	$_SESSION['user']="";
	unset($_SESSION['user']);
?>
<script> alert("Muchas Gracias!"); window.location="logout.php"; </script>
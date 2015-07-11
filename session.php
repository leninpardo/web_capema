<?php 
	error_reporting("E_ALL");
	session_start();
	if(!isset($_SESSION['user'] )|| $_SESSION['user']=="")
	{ 
		die ("<script> alert('Usted no tiene los permisos necesarios'); window.location='logout.php';</script>");
	}
?>
<?php 
	session_start(); 
	require("conexion.php");
	$user=$_POST['user']; 
	$clave=$_POST['clave'];
	$r=mysql_query("select * from admin where user='$user' AND clave='$clave'");
	if($f=mysql_fetch_array($r))
	{
		$_SESSION['user']=$f['id'];
		die("<script>window.location='sistema.php';</script>");
	}
	else
	{
		die("<script> alert('Acceso denegado! Por favor ingrese el usuario correcto');
		window.location='login.php';</script>");
	}
?>
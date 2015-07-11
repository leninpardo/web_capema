<?php
	require ('../../conexion.php');

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$user = $_POST['user'];
	$clave =$_POST['clave'];

	$sql = "insert into admin (nombre, apellidos, user, clave) values ('$nombre','$apellidos','$user','$clave')";
	
	mysql_query($sql);

	die("<script> alert('Guardado correctamente');
		window.location='../../sistema.php';</script>");
	

?>	
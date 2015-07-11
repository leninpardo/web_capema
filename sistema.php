<?php 
require("session.php");
require_once('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>COPEMA | Cooperativa de servicios multiples</title>
	<meta name="description" content="pelñskdjdj">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/mantenimiento.css">
	<script src="js/jquery.js"></script>
	
	
	<script>
      function cargar(div,desde){
        cargando="<div style='width:900px;height:350px;'>Cargando...</div>";
        document.getElementById("accordion").innerHtml = cargando;
        // alert('hola');
        $(div).load(desde);
      }
    </script> 
</head>
<body class="body">
	<div class="principalContainer">
		<header class="cabeceraContainer">
			<figure class="cabeceraContainer-figure left">
				<a href="index.html">	
					<img src="img/logo.jpg" width="100" height="80" class="cabeceraContainer-image" />
				</a>
			</figure>
			<span class="cabeceraContainer-logo">CENTRAL AGROPECUARIO PERLA DEL MAYO</span>
			<span class="cabeceraContainer-buscador rigth">
				<input type="text" name="" placeholder="Search" class="label">
			</span>	
		</header>
		<nav class="menuContainer">
			<div class="icon-menu menuContainer-menucito">
				
			</div>
			<ul class="menuContainer-lista">
				<li class="menuContainer-item"><a href="index.php">Portada Principal</a></li>
				<li class="menuContainer-item"><a href="JavaScript:cargar('#content','view/mantenimiento-user.php')" class="menuContainer-link">Usuario</a></li>
				<li class="menuContainer-item"><a href="JavaScript:cargar('#content','view/mantenimiento-menu.php')">Menu</a></li>
				<li class="menuContainer-item"><a href="JavaScript:cargar('#content','view/mantenimiento-publicaciones.php')" class="menuContainer-link">	Publicaciones</a></li>
				<li class="menuContainer-item"><a href="JavaScript:cargar('#content','view/mantenimiento-tipo_publicaciones.php')" class="menuContainer-link">Tipo de publicaciones</a></li>
				<li class="menuContainer-item"><a href="cerrar_session.php" class="menuContainer-link">Salir</a></li>
			</ul>
		</nav>
		<div class="mantenimiento" id="accordion">
			<div id="content" class="container">
				<p>Buen dia, Bienvenidos al módulo de mantenimiento</p>
			</div>
		</div>
	</div>
</body>
<style>
	p{
		padding: .5em;
		padding-bottom: 20em;
	}
</style>
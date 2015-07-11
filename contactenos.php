<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CAPEMA | Cooperativa de servicios múltiples</title>
	<meta name="description" content="pelñskdjdj">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slides.css">
	<script src="js/jquery.js"></script>
	<script src="js/slides.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<div class="principalContainer">
		<header class="cabeceraContainer">
			<figure class="cabeceraContainer-figure left">
				<a href="index.php">	
					<img src="img/logo.jpg" width="100" height="80" class="cabeceraContainer-image" />
				</a>
			</figure>
			<span class="cabeceraContainer-logo">COOPERATIVA DE SERVICIOS MÚLTIPLES</span>
			<span class="cabeceraContainer-buscador rigth">
				<input type="text" name="" placeholder="Search" class="label">
			</span>	
		</header>
		
			<style>
			
			</style>
			<nav class="menuContainer">
				<div class="icon-menu menuContainer-menucito"></div>

				<ul class="nav menuContainer-lista">
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">INICIO</a></li>
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">CONÓCENOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="conocenos/quienessomos.php">Quienes Somos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="conocenos/misionvision.php">Misión-Visión</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="conocenos/objetivos.php">Ojetivos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="conocenos/organigrama.php">Organigrama</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="conocenos/ubicacion.php">Nuestra Ubicación</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">PRODUCTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto1.php">Café tostado molido</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto2.php">Abonos orgánicos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto3.php">Abonos foliares</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">SERVICIOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio1.php">Desarrollo organizacional y de capacidades de los Productores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio2.php">Mejoramiento de la calidad y productividad</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio3.php">Fortalecimiento de la familia y género</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio4.php">Talleres de educación ambiental</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">PROYECTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="proyectos/ejecutados.php">Ejecutados</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="proyectos/porejecutar.php">Por ejecutar</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="index.php" class="menuContainer-link">ALIADOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="aliados/colaboradores.php">Colaboradores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="aliados/clientes.php">Clientes</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="contactenos.php" class="menuContainer-link">CONTÁCTENOS</a>
				</ul>
		</nav>
		<div class="slideContainer">
           <ul class="rslides" id="slider1">
              <li><img src="img/slider1.png" alt="imagen1" height="350"></li>
              <li><img src="img/slider2.png" alt="imagen2" height="350"></li>
              <li><img src="img/slider3.png" alt="imagen3" height="350"></li>
              <li><img src="img/slider2.png" alt="imagen3" height="350"></li>
            </ul>            
		</div>
		
		<!--Externos-->
		<div class="principal">
			<div class="izquierda">
				<h4 class="izquierda-h4">Mapa del sitio</h4>
				<ul class="izquierda-lista">
					<li class="izquierda-item"><a class="izquierda-link" href="colaboradores.php">Colaboradores</a></li>
					<li class="izquierda-item"><a class="izquierda-link" href="Clientes.php">Clientes</a></li>
				</ul>
			</div>
			<div class="derecha">
				<h4 class="derecha-h4">Formulario de Contacto</h4>
				<p class="derecha-p">
					<form action="contacto.php" method="post" class="form">
						<label class="label" for="nombre">Nombre:</label>
						<input class="input" id="nombre" type="text" name="nombre" placeholder="Nombre y Apellido" required="" />
						<label class="label" for="email">Email:</label>
						<input class="input" id="email" type="email" name="email" placeholder="ejemplo@correo.com" required="" />
						<label class="label"  for="mensaje">Mensaje:</label>
						<textarea class="textarea" id="mensaje" name="mensaje" placeholder="Mensaje" required=""></textarea>
						<input class="input" id="submit" type="submit" name="submit" value="Enviar" />
					</form>
				</p>
				
			</div>
		</div>

		<footer class="pieContainer">
			CloudTic - &copy; Derechos Reservados 2015				
		</footer>		

	</div>
	
</body>
</html>
<style>
	

.label {
display:block;
margin-top:20px;
letter-spacing:1px;
}
.formulario {
display:block;
margin:0 auto;
width:510px;
color: #666666;
font-family:Arial;
}
.form {
margin:0 auto;
width:400px;
}

.input, .textarea {
width:380px;
height:27px;
background:#666666;
border:2px solid #f6f6f6;
padding:10px;
margin-top:5px;
font-size:10px;
color:#ffffff;
}

.textarea {
height:150px;
}

#submit {
width:85px;
height:35px;
border:none;
margin-top:20px;
cursor:pointer;
}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CAPEMA | Cooperativa de servicios múltiples</title>
	<meta name="description" content="Cooperativa de Servicios multiples">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/slides.css">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="../js/jquery.js"></script>
	<script src="../js/slides.js"></script>
	<script src="../js/main.js"></script>
	<script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
	 <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
</head>
<body>
	<div class="principalContainer">
		<header class="cabeceraContainer">
			<figure class="cabeceraContainer-figure left">
				<a href="index.php">	
					<img src="../img/logo.jpg" width="100" height="80" class="cabeceraContainer-image" />
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
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">INICIO</a></li>
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">CONÓCENOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="quienessomos.php">Quienes Somos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="misionvision.php">Misión-Visión</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="objetivos.php">Ojetivos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="organigrama.php">Organigrama</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="ubicacion.php">Nuestra Ubicación</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">PRODUCTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../productos/producto1.php">Café tostado molido</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../productos/producto2.php">Abonos orgánicos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../productos/producto3.php">Abonos foliares</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">SERVICIOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../servicios/servicio1.php">Desarrollo organizacional y de capacidades de los Productores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../servicios/servicio2.php">Mejoramiento de la calidad y productividad</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../servicios/servicio3.php">Fortalecimiento de la familia y género</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../servicios/servicio4.php">Talleres de educación ambiental</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">PROYECTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../proyectos/ejecutados.php">Ejecutados</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../proyectos/porejecutar.php">Por ejecutar</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="../index.php" class="menuContainer-link">ALIADOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../aliados/colaboradores.php">Colaboradores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="../aliados/clientes.php">Clientes</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="../contactenos.php" class="menuContainer-link">CONTÁCTENOS</a>
				</ul>
		</nav>
		<div class="slideContainer">
           <div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img width="1180" src="../images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img width="1180" src="../images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img width="1180" src="../images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href="http://www.freshdesignweb.com"><img width="1180" src="../images/slider/slide4.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>          
		</div>
		
		<!--Externos-->
		<div class="principal">
			<div class="izquierda">
				<h4 class="izquierda-h4">Mapa del sitio</h4>
				<ul class="izquierda-lista">
					<li class="izquierda-item"><a class="izquierda-link" href="quienessomos.php">Quienes Somos</a></li>
					<li class="izquierda-item"><a class="izquierda-link" href="misionvision.php">Misión - Visión</a></li>
					<li class="izquierda-item"><a class="izquierda-link" href="objetivos.php">Objetivos</a></li>
					<li class="izquierda-item"><a class="izquierda-link" href="organigrama.php">Organigrama</a></li>
					<li class="izquierda-item"><a class="izquierda-link" href="ubicacion.php">Nuestra Ubicación</a></li>
				</ul>
			</div>
			<div class="derecha">
				<h4 class="derecha-h4">Obetivos</h4>
				<p class="derecha-p">
					<ol class="derecha-po">
						<li>Brindar servicios orientados a la mejora de la producción de la calidad, comercialización, agroindustria e industrialización en las cadenas productivas agropecuarias.</li><br>
						<li>Ofertar bienes de calidad orientados a: agricultura, ganadería, industria, agroindustria, entre otras.</li><br>
						<li>Ofertar servicios complementarios de: Créditos en sus diferentes formas y modalidades a sus socios y trabajadores. Además captar ahorros para el cumplimiento de sus fines.</li><br>
						<li>Desarrollar investigación, asesoramiento y asesorías especializadas técnicas y productivas.</li><br>
						<li>Gestionar, administrar y ejecutar fondos de la cooperación nacional y extranjera para el cumplimiento de sus fines.</li><br>
						<li>Promover y fomentar el turismo y la artesanía en la región para incrementar los ingresos económicos y mejorar la calidad de vida de los socios.</li><br>
						<li>Otros servicios complementarios a las actividades inherentes y que sean necesarios para su desarrollo y fortalecimiento organizacional.</li><br>
					</ol>
				</p>
			</div>
		</div>
		

		
		<footer class="pieContainer">
			CloudTic - &copy; Derechos Reservados 2015				
		</footer>		

	</div>
	
</body>
</html>
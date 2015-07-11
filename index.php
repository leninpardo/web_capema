<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>CAPEMA | Cooperativa de servicios múltiples</title>
	<meta name="description" content="Cooperativa de Servicios multiples">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slides.css">
	<link rel="stylesheet" href="css/styles.css">
	<script src="js/jquery.js"></script>
	<script src="js/slides.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
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
					<img src="img/logo.jpg" width="100" height="80" class="cabeceraContainer-image" />
				</a>
			</figure>
			<span class="cabeceraContainer-logo" style="width:400px;">COOPERATIVA DE SERVICIOS MÚLTIPLE</span>
			<span>CAPEMA</span>
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
					<li class="menuContainer-item"><a href="inicio.php" class="menuContainer-link">PRODUCTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto1.php">Café tostado molido</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto2.php">Abonos orgánicos</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="productos/producto3.php">Abonos foliares</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="inicio.php" class="menuContainer-link">SERVICIOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio1.php">Desarrollo organizacional y de capacidades de los Productores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio2.php">Mejoramiento de la calidad y productividad</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio3.php">Fortalecimiento de la familia y género</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="servicios/servicio4.php">Talleres de educación ambiental</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="inicio.php" class="menuContainer-link">PROYECTOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="proyectos/ejecutados.php">Ejecutados</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="proyectos/porejecutar.php">Por ejecutar</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="inicio.php" class="menuContainer-link">ALIADOS</a>
						<ul class="menuContainer-lista submenu">
							<li class="menuContainer-item1"><a class="menuContainer-link" href="aliados/colaboradores.php">Colaboradores</a></li>
							<li class="menuContainer-item1"><a class="menuContainer-link" href="aliados/clientes.php">Clientes</a></li>
						</ul>
					</li>
					<li class="menuContainer-item"><a href="contactenos.php" class="menuContainer-link">CONTÁCTENOS</a>
				</ul>
		</nav>
		<div class="slideContainer">
           <!--<ul class="rslides" id="slider1">
              <li><img src="img/slider1.jpg" alt="imagen1" height="350"></li>
              <li><img src="img/slider2.jpg" alt="imagen2" height="350"></li>
              <li><img src="img/slider3.jpg" alt="imagen3" height="350"></li>
              <li><img src="img/slider2.jpg" alt="imagen3" height="350"></li>
            </ul>            -->
            
     	<!---->
     	<div class="slider_container">
		<div class="flexslider">
	      <ul class="slides">
	    	<li>
	    		<a href=""><img width="1180" src="images/slider/slide1.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href=""><img width="1180" src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href=""><img width="1180" src="images/slider/slide3.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
                </div>
	    	</li>
	    	<li>
	    		<a href=""><img width="1180" src="images/slider/slide2.jpg" alt="" title=""/></a>
	    		<div class="flex-caption">
                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
                </div>
	    	</li>
	    </ul>
	  </div>
   </div>
     	<!---->
		</div>
		<div class="boletinesContainer">
			<article class="boletinesContainer-article caja-grande">
				<h2 class="boletinesContainer-titulo2">Boletines Informátivos</h2>
				<ul class="boletinesContainer-lista">
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>
						</a>
					</li>
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>
						</a>
					</li>

				</ul>
				<ul class="boletinesContainer-lista">
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>
						</a>
					</li>
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>						
						</a>
					</li>

				</ul>
				<ul class="boletinesContainer-lista">
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>						
						</a>
					</li>
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>	
						</a>
					</li>

				</ul>
				<ul class="boletinesContainer-lista">
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">	
						<p>¿QUÉ ES EL CAFE?</p>	
						</a>
					</li>
					<li class="boletinesContainer-item">
						<a class="boletinesContainer-link" href="" >
						<img class="img-bole" src="img/boletin1.jpg" alt="" width="110">
						<p>¿QUÉ ES EL CAFE?</p>	
						</a>
					</li>

				</ul>
				
			</article>
			<article class="boletinesContainer-article caja-chica">
				<h2 class="boletinesContainer-titulo2">Noticias y Eventos</h2>
				<!--<marquee behavior="" direction="up" scrollAmount="3" onMouseover="this.scrollAmount='0'" onMouseout="this.scrollAmount='2'" height="200px">
					<article class="noticias">
					<h3 class="noticias-titulo3">Titulo Noticia</h3>
					<p class="noticiasp">Pequeña descripcion de la noticia pero precisa para el usuario <a href="">Ver mas</a></p>
					</article>
					<article class="noticias">
						<h3 class="noticias-titulo3">Titulo Noticia</h3>
						<p>Pequeña descripcion de la noticia pero precisa para el usuario <a href="">Ver mas</a></p>
					</article>
					<article class="noticias">
						<h3 class="noticias-titulo3">Titulo Evento</h3>
						<p>Pequeña descripcion de la noticia pero precisa para el usuario <a href="">Ver mas</a></p>
					</article>
				</marquee>-->
                <!--testimonial start-->
                <div class="about-testimonial boxed-style about-flexslider ">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides about-flex-slides">
                                <li>
                                    <div class="about-testimonial-image ">
                                        <img class="radius" width="100" alt="" src="img/testimonial-img-1.jpg">
                                    </div>
                                    <a class="about-testimonial-author" href="#">Noticia1</a>
                                    <span class="about-testimonial-company">Subida de cafe</span>
                                    <div class="about-testimonial-content">
                                        <p class="about-testimonial-quote">
                                        	La subida de cafe fue impresionante para los agricultorees, debido a que esto generará mucha controversia con la oferta y demanda
                                        	La subida de cafe fue impresionante para los agricultorees, debido a que esto generará mucha controversia con la oferta y demanda
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-testimonial-image ">
                                        <img class="radius" width="100" alt="" src="img/avatar2.jpg">
                                    </div>
                                    <a class="about-testimonial-author" href="#">Evento1</a>
                                    <span class="about-testimonial-company">Jornada Laboral</span>
                                    <div class="about-testimonial-content">
                                        <p class="about-testimonial-quote">
                                        	La subida de cafe fue impresionante para los agricultorees, debido a que esto generará mucha controversia con la oferta y demanda
                                        	La subida de cafe fue impresionante para los agricultorees, debido a que esto generará mucha controversia con la oferta y demanda
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
			</article>	
		</div>
		<!--Externos-->
		<div class="eventosContainer">
			<article class="eventosContainer-article caja-grande">
				<h2 class="eventosContainer-titulo2">Eventos Externos</h2>
				<div class="relative">
					<h3 class="eventosContainer-h3">Evento1</h3>
					<p class="eventosContainer-p">
						Molestias aperiam at rerum exercitationem explicabo, omnis optio aut rem officiis ipsa, ea id expedita magni. A.
						<a href="" class="ver">Ver mas</a>
					</p>
				</div>
				<div class="relative">
					<h3 class="eventosContainer-h3">Evento1</h3>
					<p class="eventosContainer-p">
						Molestias aperiam at rerum exercitationem explicabo, omnis optio aut rem officiis ipsa, ea id expedita magni. A.
						<a href="" class="ver">Ver mas</a>
					</p>
				</div>
				
			</article>
			<article class="eventosContainer-article caja-chica">
				<h2 class="eventosContainer-titulo2">Síguenos en:</h2>
				<ul class="sociales">
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-face"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-twitter"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
					<li class="sociales-item"><a class="sociales-link" href=""><span class="icon-google"> </span></a></li>
				</ul>
			</article>	
		</div>
		<div class="aliadosContainer">
			<h2>Nuestros Aliados</h2>
			<marquee behavior="" direction="scroll" scrollAmount="3" onMouseover="this.scrollAmount='0'" onMouseout="this.scrollAmount='2'" height="100px" width="900px">
				<figure class="aliadosContainer-figure">
					<a href="#">
						<img src="img/cafe.png" alt="Sustainable Harvest Coffee" width="50" class="aliadosContainer-image">
					</a>
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Solidaridad" width="50" class="aliadosContainer-image">
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Conservación internacional" width="50" class="aliadosContainer-image">
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Fundación Progreso	" width="50" class="aliadosContainer-image">
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Proasocio" width="50" class="aliadosContainer-image">
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Fundación Neuman" width="50" class="aliadosContainer-image">
				</figure>
				<figure class="aliadosContainer-figure">
					<img src="img/cafe.png" alt="Nueva Zelanda" width="50" class="aliadosContainer-image">
				</figure>
			</marquee>

		</div>

		<div class="certificadorasContainer">
			<h2>Certificadores</h2>
			<marquee behavior="alternate" width="500">
				
				<figure class="certificadorasContainer-figure" >
					<img src="img/coffee.gif" alt="Flocert" width="50">
				</figure>	
				<figure class="certificadorasContainer-figure" >
					<img src="img/coffee.gif" alt="Control Unión" width="50">
				</figure>	
			</marquee>
		
		</div>
		<footer class="pieContainer">
			CloudTic - &copy; Derechos Reservados 2015				
		</footer>		

	</div>
	
</body>
</html>
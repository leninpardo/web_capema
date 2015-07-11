
<html>
	<head>
		<title></title>
		<style>
			body{
				background: #F1F1F1;	
			}
			.formulario{
				width:400px;
				margin: 0 auto;
				background: #E6F4FB;
				padding: .5em;
				border:5px solid #064E32;
				text-align: center;
			}
			h3{
				text-align: center;
				font-size:25px;
				text-shadow:0 0 10px #000; 
			}
			label{
				font-size: 18px;
				text-transform: uppercase;
			}
			input{
				padding:0.5em;
				border-radius: .3em;
			}
		</style>
	</head>
	<body>
		<div class="formulario">
			<h3>Acceso autorizado</h3>
			<form action="validar.php" method="post">
				<label for="">
					Usuario:
				</label>
				<div>
					<input type="text" required name="user" placeholder="Ingrese su usuario"><br>
				</div>	

				<label for="">
					Password:
				</label>
				<div>
					<input type="password" required name="clave" placeholder="Ingrese su clave"><br>
				</div>
				<hr>
				<input type="submit" value="Acceder">
			</form>
		</div>
	</body>
</html>
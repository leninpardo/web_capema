<?php
  require_once('../conexion.php');
?>

<meta charset='UTF-8'>
<div class="formulario">
	<h3 class="h3">Mantenimiento de Usuario</h3>
	<form name="usuario" action="view/_save/mantenimiento-user.php" method="POST">
		<label for="nombre" class="label">
			Nombre:
		</label>
		<div>
			<input class="input" type="text" required name="nombre" placeholder="Ingrese su nombre"><br>
		</div>
		<label for="apellidos" class="label">
			Apellidos:
		</label>
		<div>
			<input class="input" type="text" required name="apellidos" placeholder="Ingrese sus apellidos"><br>
		</div>
		<label for="usuario" class="label">
			Usuario:
		</label>
		<div>
			<input class="input" type="text" required name="user" placeholder="Ingrese su usuario"><br>
		</div>
		<label for="password" class="label">
			Password:
		</label>
		<div>
			<input class="input" type="password" required name="clave" placeholder="Ingrese su clave"><br>
		</div>
		<hr>
				<input class="input" type="submit" value="Registrar">
	</form>
</div>

	<div class="table-container">
	  <table class="table comprueba" > 
	    <tr class="active">
	      <td class="td"><b>Id</b></td>
	      <td class="td"><b>Nombre</b></td>
	      <td class="td"><b>Apellidos</b></td>
	      <td class="td"><b>User</b></td>
	      <td class="td"><b>Accion</b></td>
	    </tr>
	    <?php
	    $sql="select * from admin ";
	    $r= mysql_query($sql);
	    $c = 0;
	    $cont = 1;
	    while($f=mysql_fetch_array($r))
	    {
	      $cod = $f['id'];
	      
	      if($c==0)
	      {
	        $color="#F4FCF4";
	        $c=1;
	      }
	      else
	      {
	        $color="white";
	        $c=0;
	      }
	  ?>
	  <tr bgcolor="<?=$color; ?>">
	    <td class="tdgray"><b><?=$cont; ?></b></td>
	    <td class="tdgray"><?=$f['nombre']; ?></td>
	    <td class="tdgray"><?=$f['apellidos']; ?></td>
	    <td class="tdgray"><?=$f['user']; ?></td>
	    <td class="tdgray"><a href="JavaScript:cargar('#content','view/_edit/editar_mantenimiento-user.php?codigo=<?=$cod;?>')"><span class="edit">Editar</span></a></td>
	    
	  </tr>
	  <?php $cont++; } ?>
	  </table>
	</div>


<?php
  require_once('../conexion.php');
?>

<meta charset='UTF-8'>
<div class="formulario">
	<h3 class="h3">Mantenimiento de Menu</h3>
	<form name="menu" action="view/_save/mantenimiento-menu.php" method="POST">
		<label for="padre" class="label">
			Padre:
		</label>
		<div>
			<input class="input" type="text" required name="hereda" placeholder="Ingrese su padre"><br>
		</div>
		<label for="descripcion" class="label">
			Descripcion:
		</label>
		<div>
			<input class="input" type="text" required name="descripcion" placeholder="Ingrese sus descripcion"><br>
		</div>
		<label for="url" class="label">
			Url:
		</label>
		<div>
			<input class="input" type="text" required name="url" placeholder="Ingrese su url"><br>
		</div>
		<hr>
				<input class="input" type="submit" value="Registrar">
	</form>
</div>

	<div class="table-container">
	  <table class="table comprueba" > 
	    <tr class="active">
	      <td class="td"><b>Id</b></td>
	      <td class="td"><b>Padre</b></td>
	      <td class="td"><b>Descripcion</b></td>
	      <td class="td"><b>Url</b></td>
	      <td class="td"><b>Accion</b></td>
	    </tr>
	    <?php
	    $sql="select * from menu ";
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
	    <td class="tdgray"><?=$f['hereda']; ?></td>
	    <td class="tdgray"><?=$f['descripcion']; ?></td>
	    <td class="tdgray"><?=$f['url']; ?></td>
	    <td class="tdgray"><a href="JavaScript:cargar('#content','view/_edit/editar_mantenimiento-menu.php?codigo=<?=$cod;?>')"><span class="edit">Editar</span></a></td>
	    
	  </tr>
	  <?php $cont++; } ?>
	  </table>
	</div>
	
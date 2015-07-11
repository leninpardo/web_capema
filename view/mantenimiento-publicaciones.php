<?php
  require_once('../conexion.php');
?>

<meta charset='UTF-8'>
<div class="formulario">
	<h3 class="h3">Mantenimiento de Publicaciones</h3>
	<form name="menu" action="view/_save/mantenimiento-publicaciones.php" method="POST">
		<label for="padre" class="label">
			Tipo Publicacion:
		</label>
		<div>
			 <select required name="id_tipo_publicacion" id="id_tipo_publicacion" class="select">
		      <option value="0">::Seleccione::</option>
		      <?php
		        $sql="select * from tipo_publicacion";
		        $result=mysql_query($sql);
		        while($row=mysql_fetch_array($result))
		        {
		          echo "<option value='$row[0]'>$row[1]</option>";
		        }
		      ?>
		    </select>
		</div>
		<label for="descripcion" class="label">
			Descripcion:
		</label>
		<div>
			<input class="input" type="text" required name="descripcion" placeholder="Ingrese sus descripcion"><br>
		</div>
		<label for="titulo" class="label">
			Titulo:
		</label>
		<div>
			<input class="input" type="text" required name="titulo" placeholder="Ingrese su titulo"><br>
		</div>
		
		<label for="foto">Foto</label>
		<div>
			<input type="file" id="foto" name="foto" required class="form-control" placeholder="Ingrese foto">
		</div>	
		<hr>
			<input class="input" type="submit" value="Registrar">
	</form>
</div>

	<div class="table-container">
	  <table class="table comprueba" > 
	    <tr class="active">
	      <td class="td"><b>Id</b></td>
	      <td class="td"><b>TPublicación</b></td>
	      <td class="td"><b>Descripcion</b></td>
	      <td class="td"><b>Titulo</b></td>
	      <td class="td"><b>Accion</b></td>
	    </tr>
	    <?php
	    $sql="select * from publicacion";
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
	    <td class="tdgray"><?=$f['id_tipo_publicacion']; ?></td>
	    <td class="tdgray"><?=$f['descripcion']; ?></td>
	    <td class="tdgray"><?=$f['titulo']; ?></td>
	    <td class="tdgray"><a href="JavaScript:cargar('#content','view/_edit/editar_mantenimiento-publicaciones.php?codigo=<?=$cod;?>')"><span class="edit">Editar</span></a></td>
	    
	  </tr>
	  <?php $cont++; } ?>
	  </table>
	</div>

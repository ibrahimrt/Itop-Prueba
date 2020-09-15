<?php
	require_once '../../modelos/Asignacion.php';
	require_once '../../modelos/Entidad.php';
	require_once '../../modelos/Potencial.php';
	require_once '../../modelos/Actividad.php';	
	$ent = Asignacion::obtenerPorId(base64_decode($_GET['id']));	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
	<link rel="stylesheet" href="../../css.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
	<ul>
		<li><a href="../potenciales" class="no-decorate-white">Potenciales</a></li>
		<li><a href="../entidades" class="no-decorate-white">Entidades</a></li>
		<li><a href="../actividades" class="no-decorate-white">Actividades</a></li>
		<li><a href="../asignacion" class="no-decorate-active">Asignar Actividad</a></li>
	</ul>
	<div class="body-container">
		<header  class="text-center">
			<h1><span>Editar Tareas Asignadas</span></h1>
		</header>
		<form action="../../controladores/Asignaciones.php" method="post">
			<input type="hidden" name="relid" value="<?= $_GET['id'] ?>" />	
			<div>			
				<select name="relmodulo" id="relmodulo"  class="input100 w-25 ">
					<?php foreach (Entidad::listarActv() as $fila) { ?>
						<option <?php if($fila[0] == $ent[1]){?> selected <?php }?> value="<?= $fila[0] ?>"><?= $fila[1]?></option>
					<?php };?>
				</select>	
			</div>
			<div>
				<select name="id" id="id"  class="input100 w-25 ">
					<?php foreach (Potencial::listarActv() as $fila) { ?>
						<option <?php if($fila[0] == $ent[2]){?> selected <?php }?> value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
					<?php };?>
				</select>
			</div>
			<div>
				<select name="modulo" id="modulo"  class="input100 w-25 ">
					<?php foreach (Actividad::listarActv() as $fila) { ?>
						<option  <?php if($fila[0] == $ent[3]){?> selected <?php }?> value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
					<?php };?>
				</select>					
			</div>				
			<input class="btn btn-green float-right m-bottom-3 fs-button-13" name="a" type="submit" value="Editar" />
		</form>
	</div>
</body>
</html>
<?php
	require_once '../../modelos/Actividad.php';
	$act = Actividad::obtenerPorId(base64_decode($_GET['id']));
	$fecha = explode(' ',$act[3]);
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
		<li><a href="../actividades" class="no-decorate-active">Actividades</a></li>
		<li><a href="../asignacion" class="no-decorate-white">Asignar Actividad</a></li>
	</ul>
	<div class="body-container animated fadeIn">
		<header>
			<h1 class="text-center"><span class="border-title">Editar Actividad</span></h1>
		</header>
		<form action="../../controladores/Actividades.php" method="post">
			<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
			<div>
				<label for="fecha">Nombre</label>
				<input name="nombre" class="input100 w-20 " placeholder="Nombre" value="<?= $act[1] ?>" required autofocus />		
			</div>
			<div>
				<label for="fecha">Descripción</label>
				<input name="descripcion" class="input100 w-20 " placeholder="Descripción" value="<?= $act[2] ?>" required />	
			</div>
			<div>
				<label for="fecha">Fecha:</label>
				<input type="date" class="input100 w-20 " value="<?= $fecha[0] ?>" name="fecha">	
			</div>			
			<input name="a" class="btn btn-green float-right m-bottom-3 fs-button-13" type="submit" value="Editar" />
		</form>
	</div>
</body>
</html>
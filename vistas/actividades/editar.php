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
</head>
<body>
	<header>
		<h1>Actividad</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Actividades.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $act[1] ?>" required autofocus />		
		<input name="descripcion" placeholder="Descripción" value="<?= $act[2] ?>" required />	
		<label for="fecha">Fecha:</label>
  		<input type="date" value="<?= $fecha[0] ?>" name="fecha">	
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
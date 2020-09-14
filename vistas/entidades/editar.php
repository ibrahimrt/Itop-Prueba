<?php
	require_once '../../modelos/Entidad.php';
	$ent = Entidad::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Entidad</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Entidades.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="modulo" placeholder="Nombre" value="<?= $ent[1] ?>" required autofocus />		
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
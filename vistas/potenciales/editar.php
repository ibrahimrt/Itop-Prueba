<?php
	require_once '../../modelos/Potencial.php';
	$pot = Potencial::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Potenciales</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Potenciales.php" method="post">
		<input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
		<input name="nombre" placeholder="Nombre" value="<?= $pot[1] ?>" required autofocus />
		<input name="apellido" placeholder="Apellido" value="<?= $pot[2] ?>" required />
		<input name="dni" placeholder="Dni" value="<?= $pot[3] ?>" required />
		<input name="a" type="submit" value="Editar" />
	</form>
</body>
</html>
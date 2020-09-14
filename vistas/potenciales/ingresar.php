<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Potenciales</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Potenciales.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />
		<input name="apellido" placeholder="Apellido" required />
		<input name="dni" placeholder="Dni" required />
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
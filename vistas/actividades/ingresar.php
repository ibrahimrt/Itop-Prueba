<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Actividad</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Actividades.php" method="post">
		<input name="nombre" placeholder="Nombre" required autofocus />		
		<input name="descripcion" placeholder="Descripción" required/>		
		<label for="fecha">Fecha:</label>
  		<input type="date"  name="fecha">		
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
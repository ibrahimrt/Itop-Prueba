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
	<div class="body-container">
		<header>
			<h1 class="text-center"><span class="border-title">Registrar Actividad</span></h1>
		</header>
		<form action="../../controladores/Actividades.php" method="post">
			<div>
				<label for="fecha">Nombre</label>
				<input name="nombre" placeholder="Nombre" class="input100 " required autofocus />		
			</div>
			<div>
				<label for="fecha">Descripción</label>
				<input name="descripcion" placeholder="Descripción" class="input100 " required/>		
			</div>
			<div>
				<label for="fecha">Fecha:</label>
				<input type="date" class="input100 "  name="fecha">		
			</div>
			<input class="btn btn-green float-right m-bottom-3 fs-button-13"  name="a" type="submit" value="Ingresar" />
		</form>
	</div>
</body>
</html>
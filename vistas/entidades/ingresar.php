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
		<li><a href="../entidades" class="no-decorate-active">Entidades</a></li>
		<li><a href="../actividades" class="no-decorate-white">Actividades</a></li>
		<li><a href="../asignacion" class="no-decorate-white">Asignar Actividad</a></li>
	</ul>
	<div class="body-container animated fadeIn">
		<header>
			<h1 class="text-center"> <span class="border-title">Registrar Entidad </span></h1>
		</header>
		<form action="../../controladores/Entidades.php" method="post">
		<div>
			<label for="modulo">Módulo</label>
			<input name="modulo" class="input100 w-20 " placeholder="Módulo" required autofocus />
		</div>
		<input name="a" type="submit"  class="btn btn-green float-right m-bottom-3 fs-button-13" value="Ingresar" />
		</form>
	</div>
</body>
</html>
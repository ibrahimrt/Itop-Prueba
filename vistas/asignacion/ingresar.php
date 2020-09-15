<?php require_once '../../modelos/Entidad.php' ?>
<?php require_once '../../modelos/Potencial.php' ?>
<?php require_once '../../modelos/Actividad.php' ?>
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
	<div class="body-container animated fadeIn">
		<header class="text-center">
			<h1><span class="border-title">Asignar Actividades</span></h1>
		</header>
		<form action="../../controladores/Asignaciones.php" method="post">
			<div>
				<label for="relmodulo">Módulo</label>
				<select name="relmodulo" id="relmodulo"  class="input100 w-25 ">
					<?php foreach (Entidad::listarActv() as $fila) { ?>
						<option value="<?= $fila[0] ?>"><?= $fila[1]?></option>
					<?php };?>
				</select>	
			</div>
			<div>
			<label for="relmodulo">Potencial</label>
				<select name="id" id="id"  class="input100 w-25 ">
					<?php foreach (Potencial::listarActv() as $fila) { ?>
						<option value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
					<?php };?>
				</select>	
			</div>
			<div>
				<label for="relmodulo">Actividad</label>
				<select name="modulo" id="modulo"  class="input100 w-25 ">
					<?php foreach (Actividad::listarActv() as $fila) { ?>
						<option value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
					<?php };?>
				</select>	
			</div>
			<input name="a" type="submit" value="Ingresar" class="btn btn-green float-right m-bottom-3 fs-button-13"/>
		</form>
	</div>
</body>
</html>
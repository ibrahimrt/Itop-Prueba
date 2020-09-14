<?php require_once '../../modelos/Entidad.php' ?>
<?php require_once '../../modelos/Potencial.php' ?>
<?php require_once '../../modelos/Actividad.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Asignar Actividades</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Asignaciones.php" method="post">
		<select name="relmodulo" id="relmodulo">
			<?php foreach (Entidad::listarActv() as $fila) { ?>
				<option value="<?= $fila[0] ?>"><?= $fila[1]?></option>
			<?php };?>
			
		</select>	
		<select name="id" id="id">
			<?php foreach (Potencial::listarActv() as $fila) { ?>
				<option value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
			<?php };?>
		</select>	
		<select name="modulo" id="modulo">
			<?php foreach (Actividad::listarActv() as $fila) { ?>
				<option value="<?= $fila[0] ?>"><?= $fila[1]?> <?= $fila[2]?></option>
			<?php };?>
		</select>	
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>
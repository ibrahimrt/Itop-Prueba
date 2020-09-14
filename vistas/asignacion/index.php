<?php require_once '../../modelos/Asignacion.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Asignación Actividades</h1>
		<h2>Listado</h2>
	</header>

	<a href="ingresar.php">Ingresar nuevo</a>
	
	<table border="1" collapse	>
		<thead>
			<tr>
				<th>ID</th>
				<th>Módulo</th>
				<th>Potencial</th>
				<th>Actividad</th>				
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Asignacion::listar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><a href="verModulo.php?id=<?=base64_encode($fila[4])?>"><?= $fila[5] ?></a></td>
					<td><a href="verPotencial.php?id=<?=base64_encode($fila[9])?>"><?= $fila[10]?> <?= $fila[11] ?></a></td>
					<td><a href="verActividad.php?id=<?=base64_encode($fila[14])?>"><?= $fila[15] ?></a></td>					
					<td>
						<?php if ($fila[13] == 0) {?> 
							<a href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
						<?php } ?>
					</td>
					<td>
						<?php if ($fila[13] == 0) {?> 
						<a href="../../controladores/Asignaciones.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
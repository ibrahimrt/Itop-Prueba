<?php require_once '../../modelos/Actividad.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Actividades</h1>
		<h2>Listado</h2>
	</header>

	<a href="ingresar.php">Ingresar nuevo</a>
	
	<table border="1" collapse	>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Fecha</th>				
				<th colspan="3">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Actividad::listar() as $fila) { ?>
				<tr>
					<td><?= $fila[0] ?></td>
					<td><?= $fila[1] ?></td>
					<td><?= $fila[2] ?></td>
					<td><?= $fila[3] ?></td>					
					<td>
						<a href="editar.php?id=<?=base64_encode($fila[0])?>">Editar</a>
					</td>
					<td>
						<?php if ($fila[4] == 1){?> 
							<a href="../../controladores/Actividades.php?a=actv&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea desactivar?')">Activar</a>
						<?php }else if ($fila[4] == 0){?>
							<a href="../../controladores/Actividades.php?a=desac&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Activar?')">Desactivar</a>
						<?php } ?>
					</td>
					<td>
						<a href="../../controladores/Actividades.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">Eliminar</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
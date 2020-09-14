<?php require_once '../../modelos/Potencial.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Potenciales</h1>
		<h2>Listado</h2>
	</header>

	<a href="ingresar.php">Ingresar nuevo</a>
	
	<table border="1" collapse	>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>DNI</th>
				<th colspan="2">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach (Potencial::listar() as $fila) { ?>
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
						<a href="../../controladores/Potenciales.php?a=alta&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea dar de Baja?')">Dar de Alta</a>
						<?php }; ?> 
						<?php if ($fila[4] == 0){?> 
						<a href="../../controladores/Potenciales.php?a=baja&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea dar de Alta?')">Dar de Baja</a>
						<?php }; ?> 
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
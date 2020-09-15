<?php require_once '../../modelos/Entidad.php' ?>
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
		<header class="text-center">
			<h1><span class="border-title">Entidades</span></h1>
		</header>
		<a href="ingresar.php"><button class="btn btn-green fs-button float-right ">Ingresar nuevo</button></a>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Módulo</th>
					<th>Borrado</th>
					<th>Fecha de Creación</th>
					<th>Fecha de Modificación</th>
					<th colspan="3">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach (Entidad::listar() as $fila) { ?>
					<tr>
						<td><?= $fila[0] ?></td>
						<td><?= $fila[1] ?></td>
						<td><?= $fila[2] ?></td>
						<td><?= $fila[3] ?></td>
						<td><?= $fila[4] ?></td>
						<td>
							<a href="editar.php?id=<?=base64_encode($fila[0])?>">
								<button class=" btn btn-blue fs-button">Editar</button>
							</a>
						</td>
						<td>
							<?php if ($fila[2] == 1){?> 
								<a href="../../controladores/Entidades.php?a=actv&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Activar?')">
								<button class="  btn btn-green fs-button">Activar</button></a>
							<?php }else if ($fila[2] == 0){?>
								<a href="../../controladores/Entidades.php?a=desac&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Desactivar?')">
								<button class=" btn btn-blue fs-button">Desactivar</button></a>
							<?php } ?>
						</td>
						<td>
							<a href="../../controladores/Entidades.php?a=eliminar&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Eliminar?')">
							<button class=" btn btn-red  fs-button">Eliminar</button></a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
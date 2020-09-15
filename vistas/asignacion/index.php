<?php require_once '../../modelos/Asignacion.php' ?>
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
			<h1><span class="border-title">Asignación Actividades</span></h1>
		</header>
		<a href="ingresar.php"> <button class="btn btn-green fs-button float-right ">Ingresar nuevo</button></a>		
		<table	>
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
						<td>
							<a href="verModulo.php?id=<?=base64_encode($fila[4])?>">
								<button class=" btn btn-green  fs-button"><?= $fila[5] ?></button>
							</a>
						</td>
						<td>
							<a href="verPotencial.php?id=<?=base64_encode($fila[9])?>" class="no-decorate">
								<button class=" btn btn-yellow fs-button"><?= $fila[10]?> <?= $fila[11] ?>
							</a></td>
						<td>
							<a href="verActividad.php?id=<?=base64_encode($fila[14])?>">
							<button class=" btn btn-blue-dark fs-button"><?= $fila[15] ?></button>
							</a>
						</td>					
						<td>
							<?php if ($fila[13] == 0) {?> 
								<a href="editar.php?id=<?=base64_encode($fila[0])?>">
									<button class=" btn btn-blue fs-button">Editar</button>
								</a>
							<?php } ?>
						</td>
						<td>
							<?php if ($fila[13] == 0) {?> 
							<a href="../../controladores/Asignaciones.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">
								<button class=" btn btn-red  fs-button">Eliminar</button></a>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
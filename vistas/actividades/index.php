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
		<li><a href="../actividades" class="no-decorate-active">Actividades</a></li>
		<li><a href="../asignacion" class="no-decorate-white">Asignar Actividad</a></li>
	</ul>
	<div class="body-container animated fadeIn">
		<header>
			<h1 class="text-center"><span class="border-title">Actividades</span></h1>
		</header>
		<a href="ingresar.php"><button class="btn btn-green fs-button float-right ">Ingresar nuevo</button></a>		
		<table>
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
							<a href="editar.php?id=<?=base64_encode($fila[0])?>">
								<button class="  btn btn-blue fs-button">Editar</button>
							</a>
						</td>
						<td>
							<?php if ($fila[4] == 1){?> 
								<a href="../../controladores/Actividades.php?a=actv&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Activar?')">
									<button class="  btn btn-green fs-button">Activar</button>
								</a>
							<?php }else if ($fila[4] == 0){?>
								<a href="../../controladores/Actividades.php?a=desac&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea Desactivar?')">
									<button class="  btn btn-blue fs-button">Desactivar</button>
								</a>
							<?php } ?>
						</td>
						<td>
							<a href="../../controladores/Actividades.php?a=elim&id=<?=base64_encode($fila[0])?>" onclick="return confirm('¿Desea eliminar?')">
								<button class=" btn btn-red  fs-button">Eliminar</button>
							</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
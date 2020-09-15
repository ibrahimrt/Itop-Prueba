<?php require_once '../../modelos/Potencial.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
	<link rel="stylesheet" href="../../css.css">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body >
	<ul>
	<li><a href="../potenciales" class="no-decorate-active">Potenciales</a></li>
	<li><a href="../entidades" class="no-decorate-white">Entidades</a></li>
	<li><a href="../actividades" class="no-decorate-white">Actividades</a></li>
	<li><a href="../asignacion" class="no-decorate-white">Asignar Actividad</a></li>
	</ul>
	<div class="body-container animated fadeIn">
		<header class="text-center">
			<h1><span class="border-title">Potenciales</span></h1>
		</header>
		<div>
			<a href="ingresar.php"><button class="btn btn-green fs-button float-right ">Ingresar nuevo </button></a>
		</div>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>DNI</th>
					<th >Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach (Potencial::listar() as $fila) { ?>
					<tr>
						<td><?= $fila[0] ?></td>
						<td><?= $fila[1] ?></td>
						<td><?= $fila[2] ?></td>
						<td><?= $fila[3] ?></td>
						<td class="d-flex justify-content-center" >
							<a href="editar.php?id=<?=base64_encode($fila[0])?>">
								<button class=" btn btn-blue fs-button m-right-2">Editar</button>
							</a>				
							<?php if ($fila[4] == 0){?> 
								<a class="no-decorate" href="../../controladores/Potenciales.php?a=baja&id=<?=base64_encode($fila[0])?>" <?php if ($fila[4] == 1){?> style="display:none" <?php } else {?> <?php } ?> onclick="return confirm('¿Desea dar de Baja?')"> 
									<button class=" btn btn-green fs-button " <?php if ($fila[4] == 1){?> style="display:none" <?php }; ?> >Dar de Baja </button>
								</a>
							<?php } 
							else if ($fila[4] == 1){?> 
							<a class="no-decorate-white"  href="../../controladores/Potenciales.php?a=alta&id=<?=base64_encode($fila[0])?>" <?php if ($fila[4] == 0){?> style="display:none" <?php } else {?>  <?php }; ?> onclick="return confirm('¿Desea dar de Alta?')">
								<button class=" btn btn-yellow fs-button" <?php if ($fila[4] == 0){?> style="display:none" <?php }; ?>  >Dar de Alta</</button>
							</a>
							<?php }; ?> 
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>
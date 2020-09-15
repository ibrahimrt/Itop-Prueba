<?php require_once '../../modelos/Asignacion.php';
$hoy = date('yy-m-d h:m:s') ?>
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
			<h1><span class="border-title">Actividades del Potencial</span></h1>		
		</header>
		<table>
			<thead>
				<tr>
					<th>Potencial</th>
					<th>Modulo</th>
					<th>Actividad</th>	
					<th>Status</th>						
				</tr>
			</thead>
			<tbody>
				<?php foreach (Asignacion::listarIndividual() as $fila) {  ?>
					<tr>
						<td><?= $fila[10]?> <?= $fila[11] ?></td>
						<td><?= $fila[5] ?></td>
						<td><?= $fila[15] ?></td>
						<td><?php if($hoy > $fila[17] ) {?>  <button class="btn btn-red fs-button ">Vencida</button> <?php }else{?>  <button class="btn btn-green fs-button ">Futura</button> <?php  } ?>  </td>
					</tr>
				<?php } ?>	
			</tbody>
		</table>
	</div>
</body>
</html>
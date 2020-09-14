<?php require_once '../../modelos/Asignacion.php';
$hoy = date('yy-m-d h:m:s') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Actividades del Potencial</h1>		
	</header>

	
	<table border="1" collapse	>
		<thead>
		<tr>
			<th>Potencial</th>
			<th>Modulo</th>
			<th>Actividad</th>	
			<th>Status</th>						
		</tr>
	</thead>
	<tbody>
		<?php foreach (Asignacion::listarIndividual() as $fila) { var_dump($hoy); ?>
			<tr>
				<td><?= $fila[10]?> <?= $fila[11] ?></td>
				<td><?= $fila[5] ?></td>
				
				<td><?= $fila[15] ?></td>
				<td><?php if($hoy > $fila[17] ) {?>   Vencida <?php }else{?>  Futura <?php  } ?>  </td>					
				
				
			</tr>
		<?php } ?>	
	</tbody>
	</table>
		
	
</body>
</html>
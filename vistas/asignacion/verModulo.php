<?php require_once '../../modelos/Asignacion.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Fórmate</title>
</head>
<body>
	<header>
		<h1>Potenciales relacionados a </h1>
		<h2>Ingresar</h2>
	</header>

	
	<table border="1" collapse	>
		<thead>
		<tr>
			<th>Potencial</th>
			<th>Modulo</th>
			<th>Actividad</th>							
		</tr>
	</thead>
	<tbody>
		<?php foreach (Asignacion::listarModulo() as $fila) { ?>
			<tr>
				<td><?= $fila[10]?> <?= $fila[11] ?></td>
				<td><?= $fila[5] ?></td>
				
				<td><?= $fila[15] ?></td>					
				
				
			</tr>
		<?php } ?>	
	</tbody>
	</table>
		
	
</body>
</html>
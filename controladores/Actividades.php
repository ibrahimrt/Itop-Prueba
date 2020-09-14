<?php require_once '../modelos/Actividad.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';
if ($accion != '') {
	$actividad = new Actividad();

	switch ($accion) {
		case 'Ingresar':
			$actividad->nombre = $_POST['nombre'];
			$actividad->descripcion = $_POST['descripcion'];
			$actividad->fecha = $_POST['fecha'].' 04:00:00';
			$actividad->ingresar();
			break;
		case 'Editar':
			$actividad->id= base64_decode($_POST['id']);
			$actividad->nombre = $_POST['nombre'];
			$actividad->descripcion = $_POST['descripcion'];	
			$actividad->fecha = $_POST['fecha'].' 04:00:00';		
			$actividad->editar();
			break;
		case 'elim':
			$actividad->id = base64_decode($_GET['id']);			
			$actividad->eliminar();
			break;
		case 'actv':
			$actividad->id = base64_decode($_GET['id']);			
			$actividad->activar();
			break;
		case 'desac':
			$actividad->id = base64_decode($_GET['id']);			
			$actividad->desactivar();
			break;
	}
}

header('Location: ../vistas/actividades');
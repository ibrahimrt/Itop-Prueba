<?php require_once '../modelos/Asignacion.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$asignacion = new Asignacion();

	switch ($accion) {
		case 'Ingresar':
			$asignacion->relmodulo = $_POST['relmodulo'];
			$asignacion->id = $_POST['id'];
			$asignacion->modulo= $_POST['modulo'];
			$asignacion->ingresar();
			break;
		case 'Editar':
			$asignacion->relmodulo = $_POST['relmodulo'];
			$asignacion->id = $_POST['id'];
			$asignacion->modulo= $_POST['modulo'];
			$asignacion->editar();
			break;
		case 'elim':
			$asignacion->id = base64_decode($_GET['id']);
			$asignacion->eliminar();
			break;
		
	}
}

header('Location: ../vistas/asignacion');
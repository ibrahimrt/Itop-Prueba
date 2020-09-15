<?php require_once '../modelos/Potencial.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';
if ($accion != '') {
	$potencial = new Potencial();

	switch ($accion) {
		case 'Ingresar':
			$potencial->nombre = $_POST['nombre'];
			$potencial->apellido = $_POST['apellido'];
			$potencial->dni = $_POST['dni'];
			$potencial->ingresar();
			break;
		case 'Editar':
			$potencial->id= base64_decode($_POST['id']);
			$potencial->nombre = $_POST['nombre'];
			$potencial->apellido = $_POST['apellido'];
			$potencial->dni = $_POST['dni'];
			$potencial->editar();
			break;
		case 'baja':
			$potencial->id = base64_decode($_GET['id']);
			$potencial->baja();
			break;
		case 'alta':
			$potencial->id = base64_decode($_GET['id']);
			$potencial->alta();
			break;
	}
}

header('Location: ../vistas/potenciales');
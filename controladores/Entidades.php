<?php require_once '../modelos/Entidad.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';
if ($accion != '') {
	$entidad = new Entidad();

	switch ($accion) {
		case 'Ingresar':
			$entidad->modulo = $_POST['modulo'];
			$entidad->fecha_creacion = Date('yy-m-d h:m:s');
			$entidad->fecha_modificacion= null;
			$entidad->borrado = 0;
			$entidad->ingresar();
			break;
		case 'Editar':
			$entidad->id= base64_decode($_POST['id']);
			$entidad->modulo = $_POST['modulo'];
			$entidad->fecha_modificacion = Date('yy-m-d h:m:s');
			$entidad->editar();
			break;
		case 'desac':
			$entidad->id = base64_decode($_GET['id']);
			$entidad->borrado = 1;
			$entidad->desactivar();
			break;
		case 'actv':
			$entidad->id = base64_decode($_GET['id']);
			$entidad->borrado = 0;
			$entidad->activar();
			break;
		case 'eliminar':
			$entidad->id = base64_decode($_GET['id']);			
			$entidad->eliminar();
			break;
	}
}

header('Location: ../vistas/entidades');
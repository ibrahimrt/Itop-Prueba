<?php
require_once 'Conexion.php';

class Actividad {
	public $id;
	public $nombre;
	public $descripcion;
	public $fecha;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->descripcion = '';
		$this->fecha= '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM actividades');
		$conexion->cerrar();
		return $listado;
	}
	public static function listarActv () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM actividades where borrar = 0');
		$conexion->cerrar();
		return $listado;
	}	

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM actividades WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO actividades (nombre,descripcion,fecha) VALUES ('$this->nombre','$this->descripcion','$this->fecha')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM actividades WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function activar () {
		$s = "UPDATE actividades SET borrar = 0 WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function desactivar () {
		$s = "UPDATE actividades SET borrar = 1 WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function editar () {

		$s = "UPDATE actividades SET nombre = '$this->nombre', descripcion = '$this->descripcion', fecha = '$this->fecha' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}
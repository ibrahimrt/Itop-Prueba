<?php
require_once 'Conexion.php';

class Entidad {
	public $id;
	public $nombre;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->modulo = '';
		$this->borrado = '';
		$this->fecha_creacion = '';
		$this->fecha_modificacion = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM entity');
		$conexion->cerrar();
		return $listado;
	}
	public static function listarActv () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM entity where borrado = 0');
		$conexion->cerrar();
		return $listado;
	}	

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM entity WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO entity (modulo) VALUES ('$this->modulo')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM entity WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function desactivar () {
		$s = "UPDATE entity SET borrado = 1 WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function activar () {
		$s = "UPDATE entity SET borrado = 0 WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE entity SET modulo = '$this->modulo', fecha_modificacion = '$this->fecha_modificacion' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}
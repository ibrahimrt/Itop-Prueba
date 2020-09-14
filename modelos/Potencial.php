<?php
require_once 'Conexion.php';

class Potencial {
	public $id;
	public $nombre;
	public $apellido;
	public $dni;
	private $conexion;

	public function __construct () {
		$this->id = 0;
		$this->nombre = '';
		$this->apellido = '';
		$this->dni = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM potenciales ');
		$conexion->cerrar();
		return $listado;
	}
	public static function listarActv () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM potenciales where baja = 0');
		$conexion->cerrar();
		return $listado;
	}
	

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM potenciales WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		
		$s = "INSERT INTO potenciales (nombre,apellido,dni) VALUES ('$this->nombre','$this->apellido', '$this->dni')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function baja () {
		$s = "UPDATE  potenciales SET baja = 1 WHERE Id = $this->id";
		
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
	public function alta () {
		$s = "UPDATE  potenciales SET baja = 0 WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE potenciales SET nombre = '$this->nombre', apellido = '$this->apellido', dni = '$this->dni' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}
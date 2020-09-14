<?php
require_once 'Conexion.php';

class Asignacion {
	public $id;
	public $relmodulo;
	public $modulo;
	private $conexion;

	public function __construct () {
		$this->relid = 0;
		$this->relmodulo = '';
		$this->id = '';
		$this->modulo = '';		
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM entityrel 
										inner join entity on entityrel.relmodulo = entity.id 
										inner join potenciales on entityrel.id = potenciales.id 
										inner join actividades on entityrel.modulo = actividades.id 
										order by entityrel.id ASC');
		//var_dump($listado);exit;
		$conexion->cerrar();
		return $listado;
	}
	public static function listarIndividual () {
		$id = base64_decode($_GET['id']);
		if($id){
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM entityrel 
										inner join entity on entityrel.relmodulo = entity.id 
										inner join potenciales on entityrel.id = potenciales.id 
										inner join actividades on entityrel.modulo = actividades.id 
										where potenciales.id = '.$id.' order by entityrel.id ASC');		
		$conexion->cerrar();	
		}else{
			return $listado = '';
		}
		
		return $listado;
	}
	public static function listarActividad () {
		$id = base64_decode($_GET['id']);
		if($id){
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM entityrel 
										inner join entity on entityrel.relmodulo = entity.id 
										inner join potenciales on entityrel.id = potenciales.id 
										inner join actividades on entityrel.modulo = actividades.id 
										where actividades.id = '.$id.' order by entityrel.id ASC');		
		$conexion->cerrar();	
		}else{
			return $listado = '';
		}
		
		return $listado;
	}
	public static function listarModulo () {
		$id = base64_decode($_GET['id']);
		if($id){
			$conexion = new Conexion ();
			$listado = $conexion->consultar('SELECT * FROM entityrel 
										inner join entity on entityrel.relmodulo = entity.id 
										inner join potenciales on entityrel.id = potenciales.id 
										inner join actividades on entityrel.modulo = actividades.id 
										where entity.id = '.$id.' order by entityrel.id ASC');		
		$conexion->cerrar();	
		}else{
			return $listado = '';
		}
		
		return $listado;
	}
	

	public static function obtenerPorId ($id) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM entityrel WHERE Id = $id");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		
		$s = "INSERT INTO entityrel (relmodulo,id,modulo) VALUES ($this->relmodulo,$this->id,$this->modulo)";
		
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM entityrel WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE entityrel SET modulo = '$this->modulo', fecha_modificacion = '$this->fecha_modificacion' WHERE Id = $this->id";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}
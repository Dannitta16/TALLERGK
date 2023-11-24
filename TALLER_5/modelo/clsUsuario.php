<?php
require_once('Conexion.php');

class Usuario extends conexion{
    private $IdUsu;
    private $NumbreDocUsu;
    private $TipoDocUsu;
    private $NomUsua;
    private $ApellidoUsa;
    private $DireccionUsa;
    private $TelfUsua;
    private $CorreoUsuario;
    private $ClaveUsua;
    private $fotoUsua;
    private $EstadoUsua;
    private $idRolusuarioFK;
	private $db;

    public function __construct() {
        $conexion = new conexion();
        $this->db = $conexion->getDB(); // Obtiene la conexión desde la clase 'conexion'
    }
    

     //Encapsulamiento
     public function getIdUsu(){
		return $this->IdUsu;
	}

	public function setIdUsu($IdUsu){
		$this->IdUsu = $IdUsu;
	}

	public function getNumbreDocUsu(){
		return $this->NumbreDocUsu;
	}

	public function setNumbreDocUsu($NumbreDocUsu){
		$this->NumbreDocUsu = $NumbreDocUsu;
	}

	public function getTipoDocUsu(){
		return $this->TipoDocUsu;
	}

	public function setTipoDocUsu($TipoDocUsu){
		$this->TipoDocUsu = $TipoDocUsu;
	}

	public function getNomUsua(){
		return $this->NomUsua;
	}

	public function setNomUsua($NomUsua){
		$this->NomUsua = $NomUsua;
	}

	public function getApellidoUsa(){
		return $this->ApellidoUsa;
	}

	public function setApellidoUsa($ApellidoUsa){
		$this->ApellidoUsa = $ApellidoUsa;
	}

	public function getDireccionUsa(){
		return $this->DireccionUsa;
	}

	public function setDireccionUsa($DireccionUsa){
		$this->DireccionUsa = $DireccionUsa;
	}

	public function getTelfUsua(){
		return $this->TelfUsua;
	}

	public function setTelfUsua($TelfUsua){
		$this->TelfUsua = $TelfUsua;
	}

	public function getCorreoUsuario(){
		return $this->CorreoUsuario;
	}

	public function setCorreoUsuario($CorreoUsuario){
		$this->CorreoUsuario = $CorreoUsuario;
	}

	public function getClaveUsua(){
		return $this->ClaveUsua;
	}

	public function setClaveUsua($ClaveUsua){
		$this->ClaveUsua = $ClaveUsua;
	}

	public function getFotoUsua(){
		return $this->fotoUsua;
	}

	public function setFotoUsua($fotoUsua){
		$this->fotoUsua = $fotoUsua;
	}

	public function getEstadoUsua(){
		return $this->EstadoUsua;
	}

	public function setEstadoUsua($EstadoUsua){
		$this->EstadoUsua = $EstadoUsua;
	}

	public function getIdRolusuarioFK(){
		return $this->idRolusuarioFK;
	}

	public function setIdRolusuarioFK($idRolusuarioFK){
		$this->idRolusuarioFK = $idRolusuarioFK;
	}

    //metodos crud usuario

    public function login(){
        // CONSULTA ENPHP CON MYSQL
        $consulta=$this->db->prepare("SELECT * FROM usuario WHERE correo_Usuario = :Usuario and password_usuario = :Clave");
        $consulta->bindParam(':Usuario',$this->CorreoUsuario);
        $consulta->bindParam(':Clave',$this->ClaveUsua);
    $consulta->execute();

    if ($consulta->rowCount()==1) {
            return true;
        }else{
            return false;
        }

    }

	public function consultarporCodigo(){
		$filas=null; //consulta vacia
		$consulta = $this->db->prepare("SELECT nombre_usuario, apellido_usuario, correo_Usuario, telefono_Usuario, direccion_usuario, password_usuario, idRolusuarioFK, estado_usuario FROM usuario WHERE id_usuario = :id");
		$consulta->bindParam(':id', $this->IdUsu);
		$consulta->execute();
		while($resultado=$consulta->fetch()){
			$filas[]=$resultado;
		}
		return $filas;
	}
	

	public function registroUsuario() {
		$consulta = $this->db->prepare("INSERT INTO usuario (id_usuario, nombre_usuario, apellido_usuario, direccion_usuario, telefono_Usuario, correo_Usuario, password_usuario, estado_usuario) VALUES (:idUsuario, :nombre, :apellido, :direccion, :telefono, :correo, :password, :estado)");
		$consulta->bindParam(':idUsuario', $this->IdUsu);
		$consulta->bindParam(':nombre', $this->NomUsua);
		$consulta->bindParam(':apellido', $this->ApellidoUsa);
		$consulta->bindParam(':direccion', $this->DireccionUsa);
		$consulta->bindParam(':telefono', $this->TelfUsua);
		$consulta->bindParam(':correo', $this->CorreoUsuario);
		$consulta->bindParam(':password', $this->ClaveUsua);
		$consulta->bindParam(':estado', $this->EstadoUsua);
	
		if ($consulta->execute()) {
			header('Location: ../vistas/fromUsuario.php?mensaje=correcto');
		} else {
			header('Location: ../vistas/fromUsuario.php?mensaje=incorrecto');
		}
	}
	
	public function editarUsuario() {
		$consulta = $this->db->prepare("UPDATE usuario SET 
			nombre_usuario = :nombre,
			apellido_usuario = :apellido,
			direccion_usuario = :direccion,
			telefono_Usuario = :telefono,
			correo_Usuario = :correo,
			password_usuario = :password,
			estado_usuario = :estado
		WHERE id_usuario = :idUsuario");
	
		$consulta->bindParam(':nombre', $this->NomUsua);
		$consulta->bindParam(':apellido', $this->ApellidoUsa);
		$consulta->bindParam(':direccion', $this->DireccionUsa);
		$consulta->bindParam(':telefono', $this->TelfUsua);
		$consulta->bindParam(':correo', $this->CorreoUsuario);
		$consulta->bindParam(':password', $this->ClaveUsua);
		$consulta->bindParam(':estado', $this->EstadoUsua);
		$consulta->bindParam(':idUsuario', $this->IdUsu);
	
		if ($consulta->execute()) {
			header('Location: ../vistas/form_Codigo.php?mensaje=correcto');
		} else {
			header('Location: ../vistas/form_Codigo.php?mensaje=incorrecto');
		}
	}
	
	
}
?>
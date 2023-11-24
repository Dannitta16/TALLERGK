<?php
require_once('conexion.php');

    class Rol extends Conexion{
        private $idR;
        private $descR;
        private $estadoR;

    public function __construct(){
        $this->db=parent::__construct();
    }

    public function getIdR(){
		return $this->idR;
	}

	public function setIdR($idR){
		$this->idR = $idR;
	}

	public function getDescR(){
		return $this->descR;
	}

	public function setDescR($descR){
		$this->descR = $descR;
	}

	public function getEstadoR(){
		return $this->estadoR;
	}

    public function setEstadoR($estadoR){
		$this->estadoR = $estadoR;
	}

    public function registrarRol(){
        $consulta=$this->db->prepare("INSERT INTO rolusuario (idRolUsuario, descripcionRolUsuario, estadoRolUsuario) VALUES (:id, :desp, :est)");
        $consulta->bindParam(':id',$this->idR);
        $consulta->bindParam(':desp',$this->descR);
        $consulta->bindParam(':est',$this->estadoR);
        

        if ($consulta->execute()) {
            header('Location: ../vistas/formroles.php?mensaje=correcto');
        }else{
            header('Location: ../vistas/formroles.php?mensaje=incorrecto');
        }

    }

    public function consultarTodos(){
        $consulta=$this->db->prepare("SELECT * FROM rol_usuario");
        $filas=null;
        $consulta->execute();
        while($resultado=$consulta->fetch()){
            $filas[]=$resultado;
        }
        return $filas;
    }
}
?>
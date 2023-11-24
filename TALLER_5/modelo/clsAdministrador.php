<?php
require_once("conexion.php" );

class Administrador extends conexion{
private$IdAdministrador;
private$registrarAdministrador;
private$consultarAdministrador;
private$inactivarAdministrador;


public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }


    //Encapsulamiento
    public function getIdAdministrador(){
		return $this->IdAdministrador;
	}

	public function setIdAdministrador($IdAdministrador){
		$this->IdAdministrador = $IdAdministrador;
	}

	public function getRegistrarAdministrador(){
		return $this->registrarAdministrador;
	}

	public function setRegistrarAdministrador($registrarAdministrador){
		$this->registrarAdministrador = $registrarAdministrador;
	}

	public function getConsultarAdministrador(){
		return $this->consultarAdministrador;
	}

	public function setConsultarAdministrador($consultarAdministrador){
		$this->consultarAdministrador = $consultarAdministrador;
	}

	public function getInactivarAdministrador(){
		return $this->inactivarAdministrador;
	}

	public function setInactivarAdministrador($inactivarAdministrador){
		$this->inactivarAdministrador = $inactivarAdministrador;
	}
}
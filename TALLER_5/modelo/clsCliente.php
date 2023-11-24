<?php
require_once("conexion.php" );

class Cliente extends conexion{
private$IdCliente;
private$registrarCliente;
private$consultarCliente;
private$ActualizarCliente;
private$inactivarCliente;

public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }
	
	

    //Encapsulamiento
    public function getIdCliente(){
		return $this->IdCliente;
	}

	public function setIdCliente($IdCliente){
		$this->IdCliente = $IdCliente;
	}

	public function getRegistrarCliente(){
		return $this->registrarCliente;
	}

	public function setRegistrarCliente($registrarCliente){
		$this->registrarCliente = $registrarCliente;
	}

	public function getConsultarCliente(){
		return $this->consultarCliente;
	}

	public function setConsultarCliente($consultarCliente){
		$this->consultarCliente = $consultarCliente;
	}

	public function getActualizarCliente(){
		return $this->ActualizarCliente;
	}

	public function setActualizarCliente($ActualizarCliente){
		$this->ActualizarCliente = $ActualizarCliente;
	}

	public function getInactivarCliente(){
		return $this->inactivarCliente;
	}

	public function setInactivarCliente($inactivarCliente){
		$this->inactivarCliente = $inactivarCliente;
	}
}
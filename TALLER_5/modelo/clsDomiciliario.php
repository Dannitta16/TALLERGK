<?php
require_once("conexion.php" );

class Domiciliario extends conexion{
private$IdDomiciliario;
private$ActualizarDomiciliario;
private$consultarDomiciliario;
private$inactivarDomiciliario;

public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }


    //Encapsulamiento

    public function getIdDomiciliario(){
        return $this->IdDomiciliario;
    }

    public function setIdDomiciliario($IdDomiciliario){
        $this->IdDomiciliario = $IdDomiciliario;
    }

    public function getActualizarDomiciliario(){
        return $this->ActualizarDomiciliario;
    }

    public function setActualizarDomiciliario($ActualizarDomiciliario){
        $this->ActualizarDomiciliario = $ActualizarDomiciliario;
    }

    public function getConsultarDomiciliario(){
        return $this->consultarDomiciliario;
    }

    public function setConsultarDomiciliario($consultarDomiciliario){
        $this->consultarDomiciliario = $consultarDomiciliario;
    }

    public function getInactivarDomiciliario(){
        return $this->inactivarDomiciliario;
    }

    public function setInactivarDomiciliario($inactivarDomiciliario){
        $this->inactivarDomiciliario = $inactivarDomiciliario;
    }
}
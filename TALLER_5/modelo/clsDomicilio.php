<?php
require_once("conexion.php" );

class domicilio extends conexion{
private$IdDomicilio;
private$horaDomicilio;
private$estadoDomicilio;

public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }

    //Encapsulamiento
    public function getIdDomicilio(){
        return $this->IdDomicilio;
    }

    public function setIdDomicilio($IdDomicilio){
        $this->IdDomicilio = $IdDomicilio;
    }

    public function getHoraDomicilio(){
        return $this->horaDomicilio;
    }

    public function setHoraDomicilio($horaDomicilio){
        $this->horaDomicilio = $horaDomicilio;
    }

    public function getEstadoDomicilio(){
        return $this->estadoDomicilio;
    }

    public function setEstadoDomicilio($estadoDomicilio){
        $this->estadoDomicilio = $estadoDomicilio;
    }
}
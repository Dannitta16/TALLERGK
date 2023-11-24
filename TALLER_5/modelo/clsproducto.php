<?php
require_once("conexion.php" );

class Producto extends conexion{
private$IdProducto;
private$descripcionProductos;
private$estadoProducto;

public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }


    //Encapsulamiento
    public function getIdProducto(){
        return $this->IdProducto;
    }

    public function setIdProducto($IdProducto){
        $this->IdProducto = $IdProducto;
    }

    public function getDescripcionProductos(){
        return $this->descripcionProductos;
    }

    public function setDescripcionProductos($descripcionProductos){
        $this->descripcionProductos = $descripcionProductos;
    }

    public function getEstadoProducto(){
        return $this->estadoProducto;
    }

    public function setEstadoProducto($estadoProducto){
        $this->estadoProducto = $estadoProducto;
    }
}    ?>
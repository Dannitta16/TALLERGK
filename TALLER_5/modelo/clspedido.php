<?php
require_once("conexion.php" );

class Pedido extends conexion{
private $IdPedido;
private $fechapedido;
private $horapedido;
private $cantidadpedido;
private $valorunitariopedido;
private $subtotalpedido;
private $totalpedido;
private $pedidoadomicilio;
private $estadopedido;


public function __construct()
{
    // acceder a una clasepadre
    $this->db=parent::__construct();
    }

    //Encapsulamiento
    public function getIdPedido(){
        return $this->IdPedido;
    }

    public function setIdPedido($IdPedido){
        $this->IdPedido = $IdPedido;
    }

    public function getFechapedido(){
        return $this->fechapedido;
    }

    public function setFechapedido($fechapedido){
        $this->fechapedido = $fechapedido;
    }

    public function getHorapedido(){
        return $this->horapedido;
    }

    public function setHorapedido($horapedido){
        $this->horapedido = $horapedido;
    }

    public function getCantidadpedido(){
        return $this->cantidadpedido;
    }

    public function setCantidadpedido($cantidadpedido){
        $this->cantidadpedido = $cantidadpedido;
    }

    public function getValorunitariopedido(){
        return $this->valorunitariopedido;
    }

    public function setValorunitariopedido($valorunitariopedido){
        $this->valorunitariopedido = $valorunitariopedido;
    }

    public function getSubtotalpedido(){
        return $this->subtotalpedido;
    }

    public function setSubtotalpedido($subtotalpedido){
        $this->subtotalpedido = $subtotalpedido;
    }

    public function getTotalpedido(){
        return $this->totalpedido;
    }

    public function setTotalpedido($totalpedido){
        $this->totalpedido = $totalpedido;
    }
}
?>
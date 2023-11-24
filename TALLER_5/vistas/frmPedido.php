<?php
require_once('menuprincipal.php');
?>

<!DOCTYPE html>
<html>
<head>
     
    <title>Registro Pedido</title>
</head>
<body>
<main class="main">
    <div id="container">
        <a href="" class="volver">⬅️ Volver 
        <h2> Menú Gestion Pedido</h2>  </a>
<div class="formulario">
 
  <form action="../controlador/controlRol.php" method="POST" class="formulario1">
  <h2 class="titulo">Registro Pedido</h2>
 
    <label for=""> Codigo Pedido</label>
    <input type="numeric" name="txtidDomicilio" placeholder="ingrese Domicilio" required="" class="cajas"><br/>
    <label for=""> Hora Pedido</label>
    <input type="date" id="start" name="trip-start" value="2023-07-22" min="2022-01-01" max="2023-12-31"><br/>
    <label for=""> Estado Pedido</label>
    <select name="txtestadoRol" id=""> 
    <option value="activo">Activo</option>
    <option value="inactivo">Inactivo</option>
    </select>

    <br> <br>
    <input type="submit" value ="Registro" class="btn"> 
    </form>
    <div>
    
<br>
</body>
</html>
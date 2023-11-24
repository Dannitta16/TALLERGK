<?php
require_once('menuprincipal.php');
?>

<!DOCTYPE html>
<html>
<head>
     
    <title>Registro Producto</title>
</head>
<body>
<main class="main">
    <div id="container">
        <a href="" class="volver">⬅️ Volver 
        <h2> Menú Gestion Producto</h2>  </a>
<div class="formulario">
 
  <form action="../controlador/controlRol.php" method="POST" class="formulario1">
  <h2 class="titulo">Registro producto</h2>
 
    <label for=""> Codigo </label>
    <input type="numeric" name="txtidDomicilio" placeholder="ingrese Codigo" required="" class="cajas"><br/>
    <label for=""> nombre</label>
    <input type="numeric" name="txtidDomicilio" placeholder="ingrese nombre" required="" class="cajas"><br/>
    <label for=""> precio compra </label>
    <input type="numeric" name="txtidDomicilio" placeholder="ingrese precio" required="" class="cajas"><br/>
    
    <select name="txtestadoRol" id="">  
    <option value="activo">Activo</option>
    <option value="inactivo">Inactivo</option>
    

    </select>
    <input type="submit" value ="Registro" class="btn"> 
    <br> <br> 
    </form>
    <div>
<br>
</body>
</html>





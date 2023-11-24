<?php
require_once('menuprincipal.php');
?>

<!DOCTYPE html>
<html>
<head>
     
    <title>Registro Roles</title>
</head>
<body>
<main class="main">
    <div id="container">
        <a href="" class="volver">⬅️ Volver 
        <h2> Menú Gestion Rol</h2>  </a>
<div class="formulario">
 
  <form action="../controlador/controlRol.php" method="POST" class="formulario1">
  <h2 class="titulo">Registro Rol</h2>
 
    <label for=""> Codigo Rol</label>
    <input type="numeric" name="txtidRol" placeholder="ingrese rol" required="" class="cajas"><br/>
    <label for=""> Descripción Rol</label>
    <input type="text" name="txtdescripRol" placeholder="ingrese la descripcion" required="" class="cajas"><br/>
    <label for=""> Estado Rol</label>
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
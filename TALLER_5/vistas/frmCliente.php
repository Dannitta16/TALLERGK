<?php
require_once('menuprincipal.php');
?>
<!DOCTYPE html>
<html>
<head>
     
    <title>Registrar Cliente</title>
</head>
<body>
<main class="main">
    <div id="container">
    <a href="" class="volver">⬅️ Volver 
    <h2> Menú Gestion Clientes</h2>  </a>
        

     <div class="formulario">
     <form action="../controlador/controlRol.php" method="POST" class="formulario1">
 <h3 class="titulo">Registro Clientes</h3>
  <label for="">Nombres Cliente</label>
  <input type="text" name="txtNombres" placeholder="ingrese nombres" required="" class="cajas"><br/>
  <label for=""> Apellidos Cliente</label>
  <input type="text" name="txtApellidos" placeholder="ingrese apellidos" required="" class="cajas"><br/>
  <label for="">Documento cliente </label>
  <input type="text" name="txtApellidos" placeholder="ingrese apellidos" required="" class="cajas"><br/>
 <label for="">Número Documento</label>
  <input type="text" name="txtnoDoc" placeholder="Ingrese No Doc" required="" class="cajas"><br/>
  <label for="">Consultar Cliente</label>
  <input type="text" name="txtNombres" placeholder="ingrese nombres" required="" class="cajas"><br/>
  <label for=""> Actualizar Cliente</label>
  <input type="text" name="txtApellidos" placeholder="ingrese apellidos" required="" class="cajas"><br/>
  <label for=""> inactivar Clientes</label>
  <input type="text" name="txtApellidos" placeholder="ingrese apellidos" required="" class="cajas"><br/>
  </select> </br>
  <br> <br>
    <input type="submit" value ="Registro" class="btn"> 
    </form>
    
</div> <br>
    
</body>
</html>
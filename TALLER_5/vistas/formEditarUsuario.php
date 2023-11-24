<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../Aplicaciones/css/bootstrap.css" />
  <link href="../Aplicaciones/css/estilos.css" rel="stylesheet" />
  <link href="../Aplicaciones/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="../Aplicaciones/js/bootstrap.js">
  <link rel="stylesheet" href="../aplicaciones/css/estilosformularios.css">
    <title>Editar||Usuario</title>
</head>
<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="../Assets/img/logo.png" width="100" height="100"  alt="">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/formconsultarcodigo.php">Consultar por id</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/formEditarUsuario.php">Actualizar </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/formEliminar.php">Eliminar</a>
              </ul>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="../vistas/menu.php">
              <a class="nav-link" href="../vistas/menuprincipal.php">  Volver</a>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
</head>
</head>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/menu1.css">
    <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
    <title>Actualizar</title>
</head>
<body>
    <h3><center>Consultar y editar Usuario:</center></h3>
    <br>
    <form method="POST" action="../controlador/controlConsultarUsuario.php">
        <label>Usuario:</label>
        <input type="number" name="txtUsuario">
        <br>
        <input type="submit" value="Consultar Datos">
    </form>
    <!--VALIDAR SI EL CODIGO DIGITADO EXISTE, SI NO EXISTE VAMOS A ESCONDER EL FORMULARIO DE ABAJO-->
    <?php
    if($_GET){
        $mensaje=$_GET['mensaje'];
        if($mensaje=='incorrecto'){
            echo "No hay datos registrados para el codigo de usuario digitado, verifique y reintente";
        }else{
            if($mensaje=='errorclave'){
                echo "La clave y la confirmacion no coinciden, verifique y reintente";
            }else{
              $idusua=$_GET['idusua'];
              $nombreusua=$_GET['nombreusua'];
              $apellidousua=$_GET['apellidousua'];
              $correousua=$_GET['correousua'];
              $telefonousua=$_GET['telefonousua'];
              $dirrecionusua=$_GET['direccionusua'];
              $contrasenausua=$_GET['contrasenausua'];
              $rolusua=$_GET['rolusua'];
              $estadousua=$_GET['estadousua'];
            
            
    ?>
    <!--FORMULARIO PARA MOSTRAR LOS DATOS CARGADOS-->

    <form method="POST" action="../controlador/controlEditarUsuario.php">
    <h4>Dijite sus nuevos datos</h4>
     <div class="form-group">
    <label for=""> Id</label> 
    <input type="text" name="txtid" class="form-control" value="<?php echo $idusua; ?>"> 
    <label for=""> Nombre:</label>
    <input type="text" name="txtNombre" class="form-control" value="<?php echo $nombreusua; ?>"> 
    <label for=""> Apellido</label>
    <input type="text" name="txtApellido" class="form-control" value="<?php echo $apellidousua; ?>"> 
    <label for=""> Correo</label>
    <input type="text" name="txtCorreo" class="form-control" value="<?php echo $correousua; ?>"> 
    <label for=""> Telefono</label>
    <input type="text" name="txtTelefono" class="form-control" value="<?php echo $telefonousua; ?>"> 
    <label for=""> Direccion</label>
    <input type="text" name="txtDireccion" class="form-control" value="<?php echo $dirrecionusua; ?>"> 
     <label for="">Contraseña</label>
    <input type="password" name="txtContrasena" class="form-control" value="<?php echo $contrasenausua; ?>"> 
    <label for=""> Rol</label>
    <select name="txtRol">
            <option selected="selected" <?php if($rolusua=='Administrador'){ echo "selected";} ?>
            >Auxiliar</option>
            <option selected="selected" <?php if($rolusua=='Auxiliar'){ echo "selected";} ?>
            >Usuario</option>
            <option selected="selected" <?php if($rolusua=='Estudiante'){ echo "selected";} ?>
            >Coordinador </option>
        </select> <br>
    
    <label for=""> Estado:</label>
    <select name="txtEstado">
            <option selected="selected" <?php if( $estadousua=='Activo'){ echo "selected";} ?>
            >Activo</option>
            <option selected="selected" <?php if( $estadousua=='Inactivo'){ echo "selected";} ?>
            >Inactivo</option>
        </select>
    <br> <br>
    <input type="submit" value="Modificar Datos">
</div>


    <?php

            }
        
        }
    }
    ?>
</body>
</html>
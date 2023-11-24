<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Aplicaciones/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Aplicaciones/css/estilos">
    <link rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="../Aplicaciones/css/bootstrap.css" />
  <link href="../Aplicaciones/css/estilos.css" rel="stylesheet" />
  <link href="../Aplicaciones/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="../Aplicaciones/js/bootstrap.js">
</head>
<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="../Assets/img/logo.png" width="100" height="100" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../vistas/formconsultarcodigo.php">Consultar por id</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/formEditarUsuario.php">Actualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/formEliminar.php">Eliminar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 <br>
 <br>
 <hr>

    <select name="" id="">
        <p> Gestión Usuario </p>
    </select>
	
    </header>
</head>
</head>
<body>
<input type="button" onclick="history.back()" class="boton" name="volver atrás" value="⇦">
    <h2 class="text-center">Consulta General Usuario</h2>
    <br>
    <br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <table class="table table-bordered table-responsive text-center">
        <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th>Direccion</th>
          
          <th>Rol</th>
          <th>Estado</th>
        </tr>

        <?php
        require_once('../modelo/usuario.php');
        $objeto = new Usuario();
        $filas = $objeto->consultarTodos();
        if ($filas != null) {
          foreach ($filas as $fila) {
        ?>
            <tr>
            <td><?php echo $fila['idusuario']; ?></td>
              <td><?php echo $fila['nombreusuario']; ?></td>
              <td><?php echo $fila['apellidousuario']; ?></td>
              <td><?php echo $fila['correousuario']; ?></td>
              <td><?php echo $fila['telefonousuario']; ?></td>
              <td><?php echo $fila['direccionusuario']; ?></td>
              <td><?php echo $fila['rolusuario']; ?></td>
              <td><?php echo $fila['estadousuario']; ?></td>
              <td>
                <a href="../controlador/ConsultarUsuario.php" class="edit">editar</a>
                <a href="#" class="delete">eliminar</a>
              </td>
            </tr>
        <?php
          }
        }
        ?>
      </table>
    </div>
  </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
  
      <link rel="stylesheet" type="text/css" href="../Aplicaciones/bootstrap/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
   </head>
    <body>
      
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <a class="navbar-brand" href="index.html">
     <img src="../assets/img/logo.png" width="100" height="100"  alt=""> 
          </a>
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../vistas/formconsultarcodigo.php">Consultar Desactivar Actualizar</a>
        </li>
        <li class="nav-item">
                  <a class="nav-link" href="../vistas/formEditarUsuario.php">Actualizar </a>
                </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/formEliminar.php">Eliminar</a>
        </li>
              <li class="nav-item">
          <a class="nav-link" href="../vistas/menuprincipal.php">Volver</a>
        </li>
        </li>
      </ul>
     
    </div>
  
  </div>
</nav>
  <hr  height="100px">

    <select name="" id="">
        <p> Gestión Usuarios </p>
    </select>
	
	<?php 
			if ($_GET){
				$mensaje=$_GET['mensaje'];
				
				if($mensaje=='errorclave'){
					echo "<div class='alert alert-danger'> <font color='red'> La clave y la confirmación no coinciden, verifique y reintente </div> </font>";
					}else{
						if($mensaje=='incorrecto'){
					echo "<div class='alert alert-danger'> El usuario ya existe verifique y reintente </div> ";
					}else{
						echo "<div class='alert alert-success'> El usuario  fue registrado correctamente</div>";
				}
			}
		}

		 ?>
    </div>
    <div>
<form action="../controlador/controlRegistroUsuario.php" method="post">   
<center><h3>Registro Usuario</h3></center>
<br>
<label for=""> Usuario</label>
<input name="txtId" type="number" placeholder="Ingrese su usuario"  />
<label for="">Nombres</label>
<input name="txtNombre" type="text" placeholder="Ingrese sus nombres" required />   
<label for="">Apellidos</label>     
<input name="txtApellido" type="text" placeholder="Ingrese sus apellidos" required />   
<label for="">Correo</label>    
<input name="txtEmail" type="email" placeholder="Ingrese su correo electrónico" required />
<label for="">Telefono</label>
<input name="txtTelefono" type="number" placeholder="Ingrese su telefono" required/>
<label for="">Direccion</label> 
<input name="txtDireccion" type="text" placeholder="Ingrese su dirección" required />
<label for="">Contraseña</label>    
<input name="txtClave" type="password" placeholder="Ingrese su contraseña" required />
<label for="">Confirmar contraseña</label>    
<input name="txtconfirmar" type="password" placeholder="Confirmar" required />
<label for="">Estado usuario</label>    
<select name="txtEstado" id="">
            <option value="Activo">Activo</option>
            <option value="Inactivo">Inactivo</option>
        </select> <br> <br>
<input type="submit" value="Registrar" class="boton">
</form>  
</div>
</body>
</html>
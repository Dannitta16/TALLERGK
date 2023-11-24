<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" type="text/css" href="../Aplicaciones/css/bootstrap.css" />
    <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <a class="navbar-brand" href="index.html">
            <img src="../Assets/img/logo.png"  width="100" height="100"  alt="">
        </a>
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../vistas/Menuprincipal.php">Menú</a>
                    </li>
                    <li class="nav-item active">  
                        <a class="nav-link" href="../vistas/fromUsuario.php">Registrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../vistas/formconsultarcodigo.php">Consultar</a>
                    </li>
                </ul>
            </div>
        </div>
        <p> <b>CONSULTA Y ACTUALIZACIÓN </b></p>
    </nav>
    <hr height="100px">
    <div class="container">
        <h3>RESULTADO CONSULTA POR ID</h3>
        <?php
        if (isset($_GET['resultados']) && !empty($_GET['resultados'])) {
            $resultados = json_decode($_GET['resultados'], true);
        
            // Verifica si se obtuvo algún resultado
            if ($resultados !== null) {
                // Procede a mostrar los datos en el formulario
            } else {
                // No se encontraron resultados, puedes mostrar un mensaje de error o hacer lo que sea necesario en esta situación
            }
        }
        

        if (isset($resultados[0])) {
            $idusua = $resultados[0]['idusua'];
            $nombreusua = $resultados[0]['nombreusua'];
            $apellidousua = $resultados[0]['apellidousua'];
            $correousua = $resultados[0]['correousua'];
            $telefonousua = $resultados[0]['telefonousua'];
            $direccionusua = $resultados[0]['direccionusua'];
            $contrasenausua = $resultados[0]['contrasenausua'];
            $estadousua = $resultados[0]['estadousua'];

        } elseif($_GET ['mensaje'] == 'correcto') {
            echo "Usuario actualizado con exito.";

        }else {
            echo "No se encontraron resultados.";
        }
        ?>

        <form method="POST" action="../controlador/controlEditarUsuario.php">
            <div class="form-group">
                    <br>
                    <label for="">Id Usuario</label>
                    <input name="txtId" type="number" value="<?php echo isset($idusua) ? $idusua : ''; ?>" />
                    <label for="">Nombres</label>
                    <input name="txtNombre" type="text" placeholder="Ingrese sus nombres" value="<?php echo isset($nombreusua) ? $nombreusua : ''; ?>" required />
                    <label for="">Apellidos</label>
                    <input name="txtApellido" type="text" placeholder="Ingrese sus apellidos" value="<?php echo isset($apellidousua) ? $apellidousua : ''; ?>" required />
                    <label for="">Correo</label>
                    <input name="txtEmail" type="email" placeholder="Ingrese su correo electrónico" value="<?php echo isset($correousua) ? $correousua : ''; ?>" required />
                    <label for="">Telefono</label>
                    <input name="txtTelefono" type="number" placeholder="Ingrese su telefono" value="<?php echo isset($telefonousua) ? $telefonousua : ''; ?>" required />
                    <label for="">Direccion</label>
                    <input name="txtDireccion" type="text" placeholder="Ingrese su dirección" value="<?php echo isset($direccionusua) ? $direccionusua : ''; ?>" required />
                    <label for="">Contraseña</label>
                    <input name="txtClave" type="password" placeholder="Ingrese su contraseña" value="<?php echo isset($contrasenausua) ? $contrasenausua : ''; ?>" required />
                    <label for="">Confirmar contraseña</label>
                    <input name="txtconfirmar" type="password" placeholder="Confirmar" required />
                    <label for="">Estado usuario</label>
                    <select name="txtEstado" id="">
                        <option value="Activo" <?php if (isset($estadousua) && $estadousua == 'Activo') echo 'selected'; ?>>Activo</option>
                        <option value="Inactivo" <?php if (isset($estadousua) && $estadousua == 'Inactivo') echo 'selected'; ?>>Inactivo</option>
                    </select> <br> <br>

                <input type="submit" value="Actualizar">
            </div>
        </form>
    </div>
    <script src="../Aplicaciones/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>



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
            <img src="../assets/img/logo.png" width="200" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
              <li class="nav-item active">
                  <a class="nav-link" href="../vistas/fromUsuario.php">Ingresar</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/formconsultarcodigo.php">Consultar por id</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/formEditarUsuario.php">Actualizar </a>
                </li>
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

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../Aplicaciones/css/styles.css">
    <link rel="stylesheet" href="../Aplicaciones/bootstrap/css/bootstrap.min.css">
    
</head>
<body>
<header id="main-header">
		
  <a id="logo-header" href="Menu.php">
		<center><span class="site-name"></span></center>
	</a> <!-- / #logo-header -->
		
		

	</header><!-- / #main-header -->
  
  <center><h1>Inactivar o EliminarUsuario</h1></center>

    <form action="../control/controlEliminarUsuario.php" method="POST">

        <label>Código: </label>
        <input type="number" name="txtCodigo" class="form-control">
        <br>
        <input type="submit" name="btnEliminarUsuario" value="EliminarUsuario" class="btn btn-primary">
    </form>
</body>
</html>
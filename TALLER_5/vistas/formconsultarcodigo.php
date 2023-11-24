<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="../Aplicaciones/bootstrap/css/bootstrap.min.css"/>
     <link rel="stylesheet" href="../Aplicaciones/css/estilosformularios.css">
  <title>Consulta||Usuario</title>
 
</head>
<body>
  <header>
  <div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="../Assets/img/logo.png"  width="100" height="100"  alt="">
          </a>
          <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNav">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="../vistas/Menuprincipal.php">Menú</a>
                </li>
                <li class="nav-item active">  
                  <a class="nav-link" href="../vistas/fromUsuario.php">Registrar</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
            </div>
          </div>
        </nav>
      </div>
    </header>


    <br>
    <h3><center>Consultar por Usuario</center></h3>

    <title>Document</title>


    <br>
    <div class="content">
    <form method="POST" action="../controlador/controlConsultarCodigo.php">
       
        <label>Usuario</label>
        <input type="number" name="txtId" class="form-control">
        <br>
        <input type="submit" name="btnConsultarUsuario" value="Consultar Datos" class="btn btn-outline-danger">                                  

    </form>
    </div>
</body>
</html>
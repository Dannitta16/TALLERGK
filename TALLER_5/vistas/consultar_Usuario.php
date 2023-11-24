<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER GK </title>
    <link rel="stylesheet" href="../Aplicaciones/css/styles.css">
    <link rel="stylesheet" href="../Aplicaciones/bootstrap/css/bootstrap.min.css">
    
</head>
<body>
    <header id="main-header">
		
        <a id="logo-header" href="Menu_Principal.php">
			 <img src="../Aplicaciones/img/lenceria-1.png" alt="" class="logo" width="400" 	height="300">
			<center><span class="site-name"></span></center>
		</a> <!-- / #logo-header -->
	</header><!-- / #main-header -->
  
    <center><h1>Menú  → Gestion Usuario</h1></center>

		
		<nav class="navbar bg-body-tertiary" style="padding: 2px; margin-left: 85px;">
		    <form class="container-fluid justify-content-start">
                <button style="width: 120px; height:80px; background: #5885AF line-height: 1em;" class="btn btn-outline-success me-2" type="button"><a href="fmrRegistroUsu.php">Ingresar</a></button>
	            <button   style="width: 120px; height:80px; background: #41729F line-height: 1em;"class="btn btn-sm btn-outline-secondary" type="button">Modificar</button>
	            <button  style="width: 120px; height:80px; background: #5885AF line-height: 1em;" class="btn btn-sm btn-outline-secondary" type="button"><a href="Consulta_GenUsu.php">Consulta General</button>
                <button   style="width: 120px; height:80px; background: #41729F line-height: 1em;" class="btn btn-sm btn-outline-secondary" type="button"><a href="Consulta_CodUsu.php">Consulta por Código</a></buttnon>
                <button   style="width: 120px; height:80px; background: #5885AF line-height: 1em; " class="btn btn-sm btn-outline-secondary" type="button"><a href="Eliminar_Usu.php">Borrar</a></button>
	            <button   style="width: 120px; height:80px; background: #41729F line-height: 1em;" class="btn btn-sm btn-outline-secondary" type="button"> <a href="Menu_Principal.php">← Volver</a></button>
                <hr>
            </form>


            <form action= "<?=$_SERVER['PHP_SELF']?>" method='post'>
        <div class="content">
            <h3>Gestion De Usuarios</h3>
            <table class="table table-bordered" >
 
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>Estado</th>
                    <th>Rol</th>
                </tr>
                <?php

                    require_once("../Modelo/ClsUsuario.php");
                    $objeto=new Usuario();
                    $filas=$objeto->ConsultaGeneral();
                    if($filas!=null){
                    {}
                    foreach($filas as $fila){
                ?>
                <tr>
                    <td><?php echo $fila['usua_codigo'];?></td>
                    <td><?php echo $fila['usua_nombre']; ?> </td>               
                    <td><?php echo $fila['usua_clave']; ?> </td>
                    <td><?php echo $fila['usua_estado']; ?> </td>
                    <td><?php echo $fila['usua_rol']; ?> </td>
                <td>

                </tr>
                <?php
                    }
                    }
                ?>
            </table>  
    </div>
</body>

<table>

    <tbody>

<?php
        if(isset($_POST['Enviar'])){
       if(empty($_POST['NoControl'])){
    echo"<script language='JavaScript'>alert
    ('Ingrese los datos');
    location.assign('#');
    </script>
    ";
       }
    }
    
    
?>

<tr>
    
</tr>
      
    </tbody>
</table>
</form>
</body>
</html>
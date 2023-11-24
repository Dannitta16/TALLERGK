<?php
require_once("../modelo/usuario.php");
if(isset($_POST) && ! empty($_POST)){
    $idusuario=$_POST["txtCodigo"];
    //echo $idusuario;
    $objUsuario= new Usuario();
    $objUsuario->setIdusua($idusuario);

    //Invocar un método para traer la variable filas de la clase

    $filas=$objUsuario->EliminarUsuario_();

    //Corrborar que el codigo llega a la clase
    //echo $objUsuario->getIdUsua;
    
    header('Location: ../vistas/fromcongenusuario.php');
}
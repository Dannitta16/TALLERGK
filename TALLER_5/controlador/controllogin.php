<?php
//importamos la clase usuario
require_once('../modelo/clsUsuario.php');
    //Valida que los campos esten llenos
    if (isset($_POST) && !empty($_POST)) {
        $usuario=$_POST['txtcorreo'];
        $clave=$_POST['txtclave'];
        
        //crear objeto de la clase

        $objUsuario=new Usuario();
        //Envia datos al objeto que se acaba de crear
        $objUsuario->setCorreoUsuario ($usuario);
        $objUsuario->setClaveUsua ($clave);
        echo $objUsuario->getCorreoUsuario();
        
        if ($objUsuario->login()==true){
            //HAY QUE LLEVARLO AL MENU
            header('Location: ../vistas/menuprincipal.php');
        }else{
            //MOSTRARLE UN ERROR EN EL LINK DEL LOGIN
            header('Location: ../vistas/frmLogin.php?fallo=error');
        }
    }

?>
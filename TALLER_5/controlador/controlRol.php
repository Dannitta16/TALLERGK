<?php
require_once('../modelo/clasRol.php');

if(isset($_POST) && !empty($_POST)) {
    $codigo = $_POST['txtidRol'];
    $nombre = $_POST['txtdescripRol'];
    $clave = $_POST['txtestadoRol'];
    $tipo = $_POST['txttipoRol'];

    // Verifica que la clave y la confirmación son iguales
    if ($clave === $_POST['txtconfirmacionClave']) {
        $objRol = new rol();
        // Envía los datos a la clase
        $objRol->setRolCodigo($codigo);
        $objRol->setRolNombre($nombre);
        $objRol->setRolClave($clave);
        $objRol->setRolTipo($tipo);
        // Verifica que los datos lleguen a la clase

        
        // Finaliza la ejecución o redirige a otra página si es necesario
    } else {
        echo "Las claves no coinciden";
    }
}
?>

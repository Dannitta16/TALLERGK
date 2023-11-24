<?php
require_once('../modelo/clsUsuario.php');

if (isset($_POST) && !empty($_POST)) {
    $idusua = $_POST['txtId'];
    $nombre = $_POST['txtNombre'];
    $apellido = $_POST['txtApellido'];
    $correo = $_POST['txtEmail'];
    $telefono = $_POST['txtTelefono'];
    $direccion = $_POST['txtDireccion'];
    $contrasena = $_POST['txtClave']; // Asumiendo que el campo se llama txtClave
    $confirmar = $_POST['txtconfirmar'];
    $estado = $_POST['txtEstado'];

    if ($contrasena == $confirmar) {
        $objUsuario = new Usuario();
        $objUsuario->setIdUsu($idusua);
        // Asignar los valores a las propiedades del objeto Usuario
        $objUsuario->setNomUsua($nombre);
        $objUsuario->setApellidoUsa($apellido);
        $objUsuario->setCorreoUsuario($correo);
        $objUsuario->setTelfUsua($telefono);
        $objUsuario->setDireccionUsa($direccion);
        $objUsuario->setClaveUsua($contrasena);
        $objUsuario->setEstadoUsua($estado);

        // Invocar el método de actualización
        $objUsuario->editarUsuario();
    } else {
        header('Location: ../vistas/form_Codigo.php?mensaje=errorclave');
    }
}
?>

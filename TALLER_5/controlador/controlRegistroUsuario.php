<?php
require_once('../modelo/clsUsuario.php');

// Comprobamos si se han enviado datos desde el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobamos que las variables del formulario están definidas y no están vacías
    if (isset($_POST) && !empty($_POST)) {
        $id = $_POST['txtId'];
        $nombre = $_POST['txtNombre'];
        $apellido = $_POST['txtApellido'];
        $correo = $_POST['txtEmail'];
        $telefono = $_POST['txtTelefono'];
        $direccion = $_POST['txtDireccion'];
        $password = $_POST['txtClave'];
        $confirmar = $_POST['txtconfirmar'];
        $estado = $_POST['txtEstado'];

        if ($password == $confirmar) {
            // Crear una instancia de la clase Usuario
            $objUsuario = new Usuario();

            // Establecer los datos del usuario
            $objUsuario->setIdUsu($id);
            $objUsuario->setNomUsua($nombre);
            $objUsuario->setApellidoUsa($apellido);
            $objUsuario->setCorreoUsuario($correo);
            $objUsuario->setTelfUsua($telefono);
            $objUsuario->setDireccionUsa($direccion);
            $objUsuario->setClaveUsua($password);
            $objUsuario->setEstadoUsua($estado);

            // Invocar el método de registro
            $objUsuario->registroUsuario();
        } else {
            // Las contraseñas no coinciden
            header('Location: ../vistas/fromUsuario.php?mensaje=errorclave');
        }
    }
}
?>

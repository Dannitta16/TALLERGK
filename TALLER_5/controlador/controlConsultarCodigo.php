<?php
require_once('../modelo/clsUsuario.php');

if (isset($_POST) && !empty($_POST)) {
    $idusua = $_POST['txtId'];
    $objUsuario = new Usuario();
    $objUsuario->setIdUsu($idusua);

    // Invocar método para obtener los detalles del usuario
    $filas = $objUsuario->consultarporCodigo();

    if ($filas == NULL) {
        header('Location: ../vistas/form_Codigo.php?mensaje=incorrecto');
    } else {
        // Crear un array para almacenar los resultados
        $resultados = array();

        foreach ($filas as $fila) {
            $resultados[] = array(
                'idusua' => $idusua,
                'nombreusua' => $fila['nombre_usuario'],
                'apellidousua' => $fila['apellido_usuario'],
                'correousua' => $fila['correo_Usuario'],
                'telefonousua' => $fila['telefono_Usuario'],
                'direccionusua' => $fila['direccion_usuario'],
                'contrasenausua' => $fila['password_usuario'],
                'estadousua' => $fila['estado_usuario']
                // No has definido $rolusua en tu código, asegúrate de agregarlo si es necesario
            );
        }

        // Redirigir a la página con los detalles del usuario
        header('Location: ../vistas/form_Codigo.php?mensaje=Correcto&resultados=' . json_encode($resultados));
    }
}
?>

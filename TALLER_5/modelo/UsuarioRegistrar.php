<html>
    <head>
        <title>CRUD</title>
    </head>
<body>

<?php
    include("conexion.php");
    //selct * from 
    $sql="selct * from usuario";
    $resultado=mysqli_query($conexion,$sql);
?>

    <h1>REGISTRO DE USUARIOS</h1>
    <a href="">Nuevo usuario</a><br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo documento</th> 
                <th>No. Doc</th>
                <th>Nombre</th>

                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
                while ($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td> <?php echo $filas['id']?> </td>
                <td> <?php echo $filas['curso']?> </td>
                <td> <?php echo $filas['name']?> </td>
                <td> <?php echo $filas['apellido']?> </td>
                <td> 
                    <?php echo "<a href=''>EDITAR</a>"; ?>
                    -
                    <?php echo "<a href=''>ELIMINAR</a>"; ?>

                </td>
            
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexion);
    ?>
</body>
</html>

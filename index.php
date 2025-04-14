<?php include 'config.php'; ?>

<h1>Lista de usuarios</h1>

<a href="create.php">Agregar Nuevo</a>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>lastName</td>
        <td>Acciones</td>
    </tr>
    
    <?php
    
    $result = $conexion->query("SELECT * FROM usuario");

    while($row = $result->fetch_assoc()){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[lastname]</td>
                <td><a href='#'>Editar</a> | <a href='#'>Eliminar</a></td>
            </tr> ";
    }

    ?>
</table>
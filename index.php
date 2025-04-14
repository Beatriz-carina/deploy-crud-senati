<?php include 'config.php'; ?>
<style>
    table{
        ba
    }
 </style>   
 <h1>Lista de Usuarios</h1>
 
 <a href="create.php">Agregar Nuevo</a>

 <table border="i">
  <tr>
  <td> id</td>
  <td> name </td>
  <td> lastname </td>
  <td> Actions </td>

</tr>

<?php
$result = $conexion->query("SELECT * FROM usuario");

while($row = $result->fetch_assoc()){
 echo "
    <tr>
  <td> $row[id]</td>
  <td> $row[name] </td>
  <td> $row[lastname] </td>
  <td><a href= 'a' </td>

</tr> ";
}

?>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrador</title>
</head>
<body>
    <h1>Estetica Integral M&A</h1>
    <button type="submit"><a href="index.html">Inicio</a></button>

    <h2>Turnos</h2>
    <p>la siguiente lista muestra los turnos asignados</p>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>nombre</th>
        <th>email</th>
        <th>telefono</th>
        <th>dia</th>
        <th>horario</th>
        <th>modificar</th>
        <th>cancelar</th>
    </tr>
    <?php
    // 1) Conexion
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "registros");


    // 2) Preparar la orden SQL
    // Sintaxis SQL SELECT
    // SELECT * FROM nombre_tabla
    // => Selecciona todos los campos de la siguiente tabla
    // SELECT campos_tabla FROM nombre_tabla
    // => Selecciona los siguientes campos de la siguiente tabla
    $consulta='SELECT * FROM turnos';

    // 3) Ejecutar la orden y obtenemos los registros
    $datos= mysqli_query($conexion, $consulta);

    /*nueva forma con foreach
    while ($reg=mysqli_fetch_array($datos, MYSQLI_ASSOC)){
      foreach ($reg as $key => $value) {
        print ("<p>$key: $value</p>\n");
      };
    };*/

    // 4) Mostrar los datos del registro
     while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['nombre']; ?></td>
        <td><?php echo $reg['email']; ?></td>
        <td><?php echo $reg['telefono']; ?></td>
        <td><?php echo $reg['dia']; ?></td>
        <td><?php echo $reg['horario']; ?></td>
        <td><a href="modificar.php?id=<?php echo $reg['id'];?>">modificar</a></td>
        <td><a href="borrar.php?id=<?php echo $reg['id'];?>">cancelar</a></td>
        </tr>
    <?php } ?>
  </table>

</body>
</html>

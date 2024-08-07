<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estetica Integral M&A</h1>
    <br>
    <button type="submit"><a href="index.html">Salir</a></button>
    <h2>Turnos asignados</h2>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>DIA</th>
        <th>HORARIO</th>

    </tr>
    <?php

    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "registros");

    $consulta='SELECT * FROM turnos';

    $datos= mysqli_query($conexion, $consulta);

     while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['nombre']; ?></td>
        <td><?php echo $reg['email']; ?></td>
        <td><?php echo $reg['telefono']; ?></td>
        <td><?php echo $reg['dia']; ?></td>
        <td><?php echo $reg['horario']; ?></td>
        </tr>
    <?php } ?>
  </table>

</body>
</html>

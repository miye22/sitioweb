<?php

$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"registros");

  $nombre = $_POST ['nombre'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $dia = $_POST['dia'];
  $horario = $_POST['horario'];

  $consulta = "INSERT INTO turnos (id,nombre,email,telefono,dia,horario)
        VALUES ('','$nombre','$email','$telefono','$dia','$horario')";

  mysqli_query($conexion,$consulta);

  header('location: fin.php');
?>

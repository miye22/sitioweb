<?php
$usuario = $_POST["u"];
$contrasenia = $_POST["p"];


$ckuser = "admin";
$ckpass = "1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
  header ("location:agenda.php");
}else {
  header ("location:error.html");
}
 ?>

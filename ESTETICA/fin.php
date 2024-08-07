<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Estetica Integral</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
    <h1>Estetica Integral M&A</h1>
    <nav>
        <ul>
            <li><a href="estetica.html">Inicio</a></li>
            <li><a href="depilacion.php">Depilación</a></li>
            <li><a href="tratamientosfaciales.php">Tratamientos Faciales</a></li>
            <li><a href="manicuria.php">Manicuria</a></li>
            <li><a href="tratamientoscapilares.php">Tratamientos Capilares</a></li>
            <li><a href="pestañas.php">Pestañas</a></li>
            <li><a href="turnos.php">Turnos</a></li>
            <a href="login2024/login.html"><button class="btn btn-outline-danger">Login</button></a>
        </ul>
    </nav>
</header>
<br>
<div class="image-with-text">
    <img src="gracias.jpg" alt="Imagen con texto">
    <div class="overlay-text">Texto superpuesto</div>
</div>
<style>
/* Estilos para la imagen con texto superpuesto */
image-with-text {
position: relative;
text-align: center;
}

overlay-text {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: rgba(255, 255, 255, 0.7); /* Color de fondo semitransparente */
padding: 10px;
font-size: 20px; /* Tamaño de letra 20 */
font-family: 'serif'; /* Estilo de fuente serif */
color: violet; /* Color violeta/rosado */
}

image-with-text img {
  max-width: 100%; /* Ancho máximo de la imagen */
  height: auto; /* Altura automática para mantener la proporción */
}

/* Media Queries para dispositivos móviles */
@media (max-width: 600px) {
  .image-with-text {
    width: 90%; /* Ancho del contenedor al 90% en dispositivos móviles */
  }
}

/* Media Queries para tablets */
@media (min-width: 601px) and (max-width: 992px) {
  .image-with-text {
    width: 70%; /* Ancho del contenedor al 70% en tablets */
  }
}

/* Media Queries para PCs */
@media (min-width: 993px) {
  .image-with-text {
    width: 50%; /* Ancho del contenedor al 50% en PCs */
  }
}
</style>
<footer>
    <p>&copy; 2024 Estetica Integral M&A. Todos los derechos reservados.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>

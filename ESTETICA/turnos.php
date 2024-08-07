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
        </ul>
    </nav>
</header>
<br>
<form action="conexionformulario.php" method="post" enctype="application/x-www-form-urlencoded">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br><br>

    <label for="dia">Seleccionar día:</label>
    <select id="dia" name="dia" required>
        <option value="lunes">Lunes</option>
        <option value="martes">Martes</option>
        <option value="miercoles">Miércoles</option>
        <option value="jueves">Jueves</option>
        <option value="viernes">Viernes</option>
        <option value="sabados">Sábados</option>
    </select><br><br>

    <label for="horario">Seleccionar horario:</label>
    <select id="horario" name="horario" required>
        <option value="10:00">10:00hs</option>
        <option value="11:00">11:00hs</option>
        <option value="12:00">12:00hs</option>
        <option value="13:30">13:30hs</option>
        <option value="14:30">14:30hs</option>
        <option value="15:30">15:30hs</option>
        <option value="16:30">16:30hs</option>
        <option value="17:30">17:30hs</option>
        <option value="18:30">18:30hs</option>
    </select><br><br>

    <input type="submit" value="Enviar">
</form>
<style>

form {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  font-family: 'serif';
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
select {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-family: 'serif';
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-family: 'serif';
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

.error {
  color: red;
  font-size: 14px;
  margin-bottom: 10px;
  font-family: 'serif';
}

@media (max-width: 600px) {
  form {
    max-width: 90%;
  }
}

@media (min-width: 601px) and (max-width: 992px) {
  form {
    max-width: 70%;
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

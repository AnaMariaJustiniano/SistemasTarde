<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>REGISTRO DE ALUMNOS</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <br><br>
        <input type="submit" value="Registrar">
    </form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];

    if (!empty($nombre) && is_numeric($edad) && $edad >= 18) 
    {
        echo "<h2>Registro exitoso:</h2>";
        echo "<strong>Nombre: </strong> $nombre <br>";
        echo "<strong> Edad:  </strong>$edad <br>";
        echo "El estudiante es mayor de edad. <br>";
    } else 
    { 
        echo "Por favor, ingrese datos válidos <br>";
    }
}   
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="styleSheet" href="estilos.css">
</head>
<body>
    <h1>FORMULARIO PERSONA</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required>
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" required>
        <label for="edad">Edad:</label>
        <input type="number" name="edad" required>
        <input type="submit" name="boton" value="Enviar">
    </form>

<?php
include 'persona.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=($_POST["nombre"]);
    $telefono=($_POST["telefono"]);
    $edad=($_POST["edad"]);

    $persona1=new persona($nombre, $telefono, $edad);
    echo "<div class='resultado'>";
    echo "<br>";
    echo "Los datos de la persona son: "."<br>";
    $persona1->mostrarPersona();
    echo "</div>";
}
?>
</body>
</html>




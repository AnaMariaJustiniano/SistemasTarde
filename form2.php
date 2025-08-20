<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIONES</h1>
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <input type="submit" value="Calcular">
    </form>

<!--sentencias php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    if (is_numeric($numero1) && is_numeric($numero2)) {
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        if ($numero2 != 0) {
            $division = $numero1 / $numero2;
        } else {
            $division = "Error: División por cero";
        }
        echo "<h2>Resultados:</h2>";
        echo "Suma: $suma <br>";
        echo "Resta: $resta <br>";
        echo "Multiplicación  $multiplicacion <br>";
        echo "División: $division <br>";
    } else {
        echo "Por favor, ingrese números válidos.";
    }
}   
 ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCULO DE SUELDO NETO</h1>
    <form action="" method="POST">
        <Label for="nombre">Nombre: </Label>
        <input type="text" name="nombre" id="nombre" required>
        <br><br>
        <Label for="sueldo">Sueldo:</Label>
        <input type="number" name="sueldo" id="sueldo" required>
        <br><br>
        <label for="bono">Bono: </label>
        <input type="number" name="bono" id="bono" required>
        <br><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $sueldo = $_POST['sueldo'];
    $bono = $_POST['bono'];
    
    if (is_numeric($sueldo) && is_numeric($bono) && $sueldo >= 0 && $bono >= 0) {
        $descuento =  $sueldo*0.12; // 12% de descuento
        $sueldoNeto = $sueldo + $bono- $descuento;
        echo "<h2>Resultados:</h2>";
        echo "Nombre: $nombre <br>";
        echo "Sueldo: $sueldo <br>";
        echo "Bono: $bono <br>";
        echo "Descuento (12%): $descuento <br>";
        echo "Sueldo Neto: $sueldoNeto <br>";
    } else {
        echo "Por favor, ingrese valores numéricos válidos para sueldo y bono.";
    }
}   
?>
</body>
</html>
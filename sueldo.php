<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PLANILLA DE SUELDO</h1>
    <form action="" method="POST">
        <label for="nombre">NOMBRE EMPLEADO: </label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="sueldoBasico">SUELDO BASICO:</label>
        <input type="number" name="sueldoBasico" id="sueldoBasico" required>
         <br><br>
        <label for="Bono">BONO:</label>
        <input type="number" name="bono" id="bono" required>
         <br><br>
        <input type="submit" value="Calcular sueldo Final">
        <input type="reset" value="Limpiar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $sueldoBasico = $_POST['sueldoBasico'];
        $bono = $_POST['bono'];
        if ($sueldoBasico < 0 || $sueldoBasico > 10000 || $bono < 0 || $bono > 5000) {
            echo "Por favor, ingresa valores sueldo y bono validos.";
            exit;
        }
        else{
            
        calcularSueldoFinal($nombre,$sueldoBasico, $bono);
        }

    } else {
        $sueldoBasico = 0;
        $bono = 0;
        $nombre;
     
    }
    

    function calcularSueldoFinal($nombre,$sueldoBasico, $bono){
        $descuentoAFP=($sueldoBasico*0.13);
        $sueldoTotal=$sueldoBasico + $bono - $descuentoAFP;
        echo "NOMBRE DEL EMPLEADO: $nombre <br>";
        echo "SUELDO BASICO: $sueldoBasico <br>";
        echo "BONO: $bono <br>";
        echo "DESCUENTO AFP: $descuentoAFP <br>";
        echo "SUELDO TOTAL: $sueldoTotal ";

        }
    ?>
</body>
</html>
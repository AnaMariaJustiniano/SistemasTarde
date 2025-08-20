<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> NOTAS FINALES</h1>
    <form action="" method="POST">
        <label for="nombre">NOMBRE: </label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="nota1">NOTA1:</label>
        <input type="number" name="nota1" id="nota1" required>
         <br><br>
        <label for="nota2">NOTA2:</label>
        <input type="number" name="nota2" id="nota2" required>
         <br><br>
        <label for="nota3">NOTA3:</label>
        <input type="number" name="nota3" id="nota3" required>
        <br><br>
        <input type="submit" value="Calcular Nota Final">
        <input type="reset" value="Limpiar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        if ($nota1 < 0 || $nota1 > 100 || $nota2 < 0 || $nota2 > 100 || $nota3 < 0 || $nota3 > 100) {
            echo "Por favor, ingresa valores numéricos válidos.";
            exit;
        }
        else{
            
        calcularNotaFinal($nota1, $nota2, $nota3);
        }

    } else {
        $nota1 = 0;
        $nota2 = 0;
        $nota3 = 0;
        
    }
    

    function calcularNotaFinal($nota1, $nota2, $nota3){
        $resultado=($nota1 + $nota2 + $nota3)/3;
        echo "La nota final es: $resultado <br>";
        if ($resultado >= 61) {
            echo "¡Felicidades! Has aprobado el curso.";
        } else {
            echo "Lo siento, no has aprobado el curso.";
        }
    }
    ?>
</body>
</html>
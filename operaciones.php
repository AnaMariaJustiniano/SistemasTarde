<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIONES MATEMATICAS</h1>
    <?php
    $numero1=10;
    $numero2=5;

    //operaciones
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplicacion=$numero1*$numero2;
    $division=$numero1/$numero2;
    $modulo=$numero1%$numero2;
    $potencia=pow($numero1,$numero2);
    $raiz=sqrt($numero1);
    
    //mostrar resultados
    echo "Suma: $suma <br>";
    echo "Resta: $resta <br>";
    echo "Multiplicación: $multiplicacion <br>";
    echo "División: $division <br>";
    echo "Módulo: $modulo <br>";   
    echo "Potencia: $potencia <br>";
    echo "Raíz cuadrada: $raiz <br>";
    echo "Operaciones realizadas con éxito.";  

    ?>
</body>
</html>
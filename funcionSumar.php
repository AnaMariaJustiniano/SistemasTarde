<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FUNCIONES QUE DEVUELVEN VALOR</h1>
<?php
$Sueldo=20;
$bono=50;
echo "El sueldo es: $Sueldo <br>";
echo "El bono es: $bono <br>";  
echo "El sueldo liquido pagable es: " . liquidoPagable($Sueldo, $bono) . "<br>";
function liquidoPagable($sueldo, $bono) {
    $liquido = $sueldo + $bono;
    return $liquido;
}

?>
</body>
</html>
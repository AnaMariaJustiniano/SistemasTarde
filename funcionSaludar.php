<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SALUDO</h1>
    <?php
    $nombre="Pedro";
    saludar($nombre);

    $nombre1="Paola";
    saludar($nombre1);

    //Programar la funcion saludar
    function saludar($x) {
        echo " Hola $x, bienvenido a mi página web! <br>";
    }
    ?>

</body>
</html>
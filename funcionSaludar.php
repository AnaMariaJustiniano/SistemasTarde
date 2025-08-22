<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SALUDAR</h1>
    <?php

    $texto= saludar('Juan');
    echo $texto;
    $texto2= saludar('Pedro');
    echo $texto2;


    function saludar($nombre){
        
        $resultado= "Hola $nombre, gracias por visitar mi página web <br>" ;
        return $resultado;
    }
    ?>
</body>
</html>
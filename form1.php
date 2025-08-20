<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>

<?php
    
    $nombre = $_POST['nombre'];
    echo "Hola, $nombre";
?>
</body>
</html>
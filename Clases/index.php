<?php
//crearemos una sesion para guardar los datos
session_start();
include 'persona.php';
/*creamos la variable global SESSion para guardar datos*/
if(!isset($_SESSION['personas'])){
    $_SESSION['personas']=[];
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=($_POST["nombre"]);
    $telefono=($_POST["telefono"]);
    $edad=($_POST["edad"]);
try{
    $persona1=new persona($nombre, $telefono, $edad);
    //Guardar los datos en la sesion
    $_SESSION['personas'][]=[
        'nombre'=>$nombre,
        'telefono'=>$telefono,
        'edad'=>$edad
    ];
}
catch (Exception $error){
    echo $error->getMessage();
}   
}
?>
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
<Label for="nombre">Nombre:</Label>
<input type="text" name="nombre" required>

<Label for="telefono">Telefono:</Label>
<input type="text" name="telefono" required>

<Label for="edad">Edad:</Label>
<input type="number" name="edad" required>
<input type="submit" value="Enviar datos">
</form>

<?php  

if(!empty($_SESSION['personas'])): ?>
<h2><center>Lista de Personas Registradas</center></h2>
<table border="1" cellpadding="5" align="center">
    <tr>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Edad</th>
    </tr>
    <?php foreach ($_SESSION['personas'] as $fila):?>
        <tr>
            <td><?php echo ($fila['nombre']); ?></td>
            <td><?php echo ($fila['telefono']);?></td>
            <td><?php echo ($fila['edad']);?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>
</body>
</html>
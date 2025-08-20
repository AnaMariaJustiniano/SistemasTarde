<?php
include 'persona.php';
$persona1 = new persona();
$persona1->nombre="Juancito Pinto";
$persona1->telefono="69156618";
$persona1->edad=10;

/*echo "Nombre: " . $persona1->nombre. "<br>";
echo "Teléfono: " . $persona1->telefono . "<br>";
echo "Edad: " . $persona1->edad . "<br>";*/
$persona1->mostrarPersona();
$persona1->esmayor($persona1->edad);



?>
<?php
include 'persona2.php';
$persona1 = new persona();
$persona1->setNombre("Juancito Pinto"); 
/*$persona1->setNombre("xxxxxx");
$persona1->setTelefono("69156618");
$persona1->setEdad(-10);*/

/*echo "Nombre: " . $persona1->nombre. "<br>";
echo "Teléfono: " . $persona1->telefono . "<br>";
echo "Edad: " . $persona1->edad . "<br>";*/
$persona1->mostrarPersona();
$persona1->esmayor($persona1->getEdad());



?>
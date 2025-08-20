<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERACIONES</h1>
    <?php
    $numero1=80;
    $numero2=15;
    sumar($numero1,$numero2);
    restar($numero1,$numero2);
    multiplicar($numero1,$numero2);
    dividir($numero1,$numero2);

    function sumar($numero1,$numero2) {
      
        $resultado=$numero1+$numero2;
        echo "La suma es: $resultado <br>";
   }
   function restar($numero1,$numero2) {
       
        $resultado=$numero1-$numero2;
        echo "La resta es: $resultado <br>";
   }
   function multiplicar($numero1, $numero2) {
     $resultado = $numero1 * $numero2;
     echo "La multiplicación es: $resultado <br>" ;
   }

   function dividir($numero1, $numero2){
    $resultado = $numero1 / $numero2;
    echo "La división es: $resultado <br>";
   }

?>

</body>
</html>
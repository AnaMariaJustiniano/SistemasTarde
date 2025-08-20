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
    $numero1=20;
    $numero2=52;

   $r1=sumar($numero1, $numero2);
    echo "El resultado es:  $r1 <br>" ;

   $r2=restar($numero1,$numero2); 
   echo "El resultado de la resta es: $r2"; 

    function sumar($a,$b){
        $resultado = $a +$b;
        return $resultado;    
    }
    function restar($b,$c){
        $resultado=$b-$c;
        return $resultado;
    }


    ?>
</body>
</html>
<?php
class persona{
    //atributos
    public $nombre;
    public $telefono;
    public $edad;
//metodo constructor
public function __construct($nombre=null, $telefono=null, $edad=null) {
    $this->setNombre($nombre);
    $this->setTelefono($telefono);
    $this->setEdad($edad);
   
}   
//metodos set y get
public function setNombre($nombre) {
    
    if (is_string($nombre) && !empty(trim($nombre)) && !ctype_digit($nombre)) {
        $this->nombre = $nombre;
    } else {
        throw new Exception("El nombre no debe estar con solo numeros.");
    }
}
public function getNombre(){
    return $this->nombre;
}
public function setTelefono($telefono){
    if (!empty(trim($telefono)) && ctype_digit($telefono)) {
        $this->telefono = $telefono;
    } else {
        throw new Exception("El teléfono debe contener solo números y no debe estar vacío.");
    }
}
public function getTelefono(){
    return $this->telefono;
}
public function setEdad($edad){
    if(is_numeric($edad)&&($edad>0)){
        $this->edad = $edad;
    }
    else{
        throw new Exception("La edad no puede ser numero negativo");
    }
    
}
public function getEdad(){
    return $this->edad;
}   

public function mostrarPersona(){
    echo "Nombre: " . $this->getNombre() . "<br>";
    echo "Teléfono: " . $this->getTelefono() . "<br>";   
    echo "Edad: " . $this->getEdad() . "<br>";
}
public function esMayorEdad(){
    if($this->edad>18){
        echo("Es mayor de edad");
    }
    else{
        echo("Es menor de edad");
    }

}
}
    
?>
<?php
class persona{
    //atributos
    private $nombre;
    private $telefono;
    private $edad;
//metodo constructor
public function __construct($nombre=null, $telefono=null, $edad=null) {
    $this->nombre = $nombre;
    $this->telefono=$telefono;
    $this->edad=$edad;
}   
//metodos set y get
public function setNombre($nombre){
    $this->nombre = $nombre;
}
public function getNombre(){
    return $this->nombre;
}
public function setTelefono($telefono){
    $this->telefono = $telefono;
}
public function getTelefono(){
    return $this->telefono;
}
public function setEdad($edad){
    $this->edad = $edad;
}
public function getEdad(){
    return $this->edad;
}   

public function mostrarPersona(){
    echo "Nombre: " . $this->nombre . "<br>";
    echo "Teléfono: " . $this->telefono . "<br>";   
    echo "Edad: " . $this->edad . "<br>";
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
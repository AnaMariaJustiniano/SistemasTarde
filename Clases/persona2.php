<?php
class persona{
    //atributos
    private $nombre;
    private $telefono;
    private $edad;
    
    //metodos constructor
    public function __construct($nombre=null, $telefono=null, $edad=null) {
        $this->nombre=$nombre;
        $this-> telefono=$telefono;
        $this->edad=$edad;
    }
    // metodos setter y getter
    public function setNombre($nombre){
        if(is_string($nombre) && !empty($nombre)){
            $this->nombre = $nombre;
        } else {
            throw new Exception("Nombre debe ser una cadena no vacía.");
        }   
    }
    public function getNombre(){
        return $this->nombre;
    }

    public function setTelefono($telefono){
        if(is_string($telefono) && !empty($telefono)){
            $this->telefono = $telefono;
        } else {
            throw new Exception("Teléfono debe ser una cadena no vacía.");
        }
    } 
    public function getTelefono(){
        return $this->telefono;
    }
    public function setEdad($edad){
        if(is_numeric($edad) && $edad >= 0){
            $this->edad = $edad;
        } else {
            echo("Edad debe ser un número no negativo.")."<br>";
        }
    }   
    public function getEdad(){
        return $this->edad;
    }   

    public function mostrarPersona(){
        echo "Nombre: " .$this->getNombre(). "<br>";
        echo "Teléfono: " .$this->getTelefono()."<br>";
        echo "Edad: " .$this->getEdad()."<br>";
       /* $this->esmayor($this->edad);*/
    }
    function esmayor($edad){
        if ($edad>=18){
            echo "Es mayor de edad";
        }
        else{
                echo "Es menor de edad";
            }
    }
}
  
?>
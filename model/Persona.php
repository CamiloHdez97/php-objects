<?php 

class Persona{

    private string $nombre;
    private string $apellido;
    protected int $edad;
    private static $nombreaux;

    public function __construct($nombre,$apellido,$edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getEdad(){
        return $this-> edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    } 

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function saludar(){
        
        return '<br> NombreAux' . self::$nombreaux . '</br>';
    }
}
?>
<?php

class Persona
{   public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function __construct($nombre,$edad,$correo,$apellido)
    {
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->correo=$correo;
        $this->apellido=$apellido;

    }

    
    public function saludar()
    {
        return "Hola, mi nombre es "." ".$this->nombre ." mi apellido es ".$this->apellido." mi correo es: ".$this->correo." y mi edad es: ".$this->edad ."<br>";
        
        }
}




?>
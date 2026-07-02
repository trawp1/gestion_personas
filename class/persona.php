<?php

class Persona
{   public $nombre;
    public $edad;
    public $correo;
    public $apellido;

    public function saludar()
    {
        return "Hola, mi nombre es "." ".$this->nombre ." mi apellido es ".$this->apellido." mi correo es: ".$this->correo." y mi edad es: ".$this->edad ."<br>";
        
        }
}

?>
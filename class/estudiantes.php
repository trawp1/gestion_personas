<?php
require_once "persona.php";
class estudiante extends Persona
{
#[Override]
	public function saludar()
    {
        return  "<br>"."hola soy estudiante". "<br>";
    }
}
?>
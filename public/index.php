<?php
require_once "../class/persona.php";

$persona1= New Persona();
$persona1->nombre ="oscar";
$persona1->apellido ="Moreno";
$persona1->correo ="unotres12@gmai.com";
$persona1->edad =32;


echo $persona1->saludar();


$persona2= New Persona();
$persona2->nombre ="pedro";
$persona2->apellido ="alfonzo";
$persona2->correo ="qqqqqqqqqqs12@gmai.com";
$persona2->edad =42;

echo $persona2->saludar();
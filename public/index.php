<?php
require_once "../class/persona.php";

$persona1= new Persona("oscar","34","coreo123@gmail.com","moreno");
$persona2= new Persona("pedro","42","qqqqqqqqqqs12@gmai.com","alfonzo");

echo $persona1->saludar();
echo $persona2->saludar();


require_once "../class/hotel.php";

$hotel1= new hotel("sol del mañana","medellin","todo el dia","12");

echo$hotel1->infromar();

$hote2= new hotel("leon","bogota","todo el dia","5");

echo$hotel1->infromar();








/*
$persona1= New Persona();
$persona1->nombre ="oscar";
$persona1->apellido ="Moreno";
$persona1->correo ="unotres12@gmai.com";
$persona1->edad ="32";


echo $persona1->saludar();


$persona2= New Persona();
$persona2->nombre ="pedro";
$persona2->apellido ="alfonzo";
$persona2->correo ="qqqqqqqqqqs12@gmai.com";
$persona2->edad ="42";

echo $persona2->saludar();

*/
?>
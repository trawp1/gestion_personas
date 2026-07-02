<?php
class hotel
{
    public $nombre_hotel;
    public $lugar;
    public $cuando_abren;
    public $numero_de_habitaciones;

    public function __construct($nombre_hotel,$lugar,$cuando_abren,$numero_de_habitaciones)
{
    $this->nombre_hotel=$nombre_hotel;
    $this->lugar=$lugar;
    $this->cuando_abren=$cuando_abren;
    $this->numero_de_habitaciones=$numero_de_habitaciones;

}

    public function infromar()
    {
        return "<br>"."<br>"."bienvenid@ al hotel  ".$this->nombre_hotel." ubicado en ".$this->lugar." y esta abierto ".$this->cuando_abren."y cuenta con un total de: ".$this->numero_de_habitaciones." habitaciones";
        }
}

?>
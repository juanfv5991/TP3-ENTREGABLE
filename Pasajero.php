<?php

class Pasajero{
    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($vNombre, $vNumeroAsiento, $vNumeroTicket)
    {
        $this->nombre = $vNombre;
        $this->numeroAsiento = $vNumeroAsiento;
        $this->numeroTicket = $vNumeroTicket;
    }

    //getting
    public function getNombre(){
        return $this->nombre;
    }
    public function getNumeroAsiento(){
        return $this->numeroAsiento;
    }
    public function getNumeroTicket(){
        return $this->numeroTicket;
    }

    //setting
    public function setNombre($vNombre){
        $this->nombre = $vNombre;
    }
    public function setNumeroAsiento($vNumeroAsiento){
        $this->numeroAsiento = $vNumeroAsiento;
    }
    public function setNumeroTicket($vNumeroTicket){
        $this->numeroTicket = $vNumeroTicket;
    }

    public function __toString()
    {
        return "Nombre: ".$this->getNombre()."\nNúmero de Asiento: ".$this->getNumeroAsiento()."\nNúmero de Ticket: ".$this->getNumeroTicket()."\n\n";
    }

    public function darPorcentajeIncremento() {
        $porcentaje = 10;
        return $porcentaje;
    }
}
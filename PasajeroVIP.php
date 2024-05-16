<?php

include_once("Pasajero.php");

class PasajeroVIP extends Pasajero {
    private $numeroViajeroFrecuente;
    private $cantidadMillasPasajero;

    public function __construct($vNombre, $vNumeroAsiento, $vNumeroTicket, $vNumeroViajeroFrecuente, $vCantidadMillasPasajero)
    {
        parent::__construct($vNombre, $vNumeroAsiento, $vNumeroTicket);
        $this->numeroViajeroFrecuente = $vNumeroViajeroFrecuente;
        $this->cantidadMillasPasajero = $vCantidadMillasPasajero;
    }

    // gettings

    public function getNumeroViajeroFrecuente() {
        return $this->numeroViajeroFrecuente;
    }
    public function getCantidadMillasPasajero() {
        return $this->cantidadMillasPasajero;
    }

    // settings

    public function setNumeroViajeroFrecuente($vNumeroViajeroFrecuente) {
        $this->numeroViajeroFrecuente = $vNumeroViajeroFrecuente;
    }
    public function setCantidadMillasPasajero($vCantidadMillasPasajero) {
        $this->cantidadMillasPasajero = $vCantidadMillasPasajero;
    }

    public function darPorcentajeIncremento() {
        $porcentaje = 35;
        if($this->getCantidadMillasPasajero() > 300){
            $porcentaje+=30;
        }
        return $porcentaje;
    }
}
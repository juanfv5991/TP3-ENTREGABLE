<?php

include_once("Pasajero.php");

class PasajeroNecesidadEspeciales extends Pasajero {
    private $serviciosEspeciales;
    public function __construct($vNombre, $vNumeroAsiento, $vNumeroTicket, $vServiciosEspeciales)
    {
        parent::__construct($vNombre, $vNumeroAsiento, $vNumeroTicket);
        $this->serviciosEspeciales = $vServiciosEspeciales;
    }

    public function getServiciosEspeciales() {
        return $this->serviciosEspeciales;
    }

    public function setServiciosEspeciales($vServiciosEspeciales){
        $this->serviciosEspeciales = $vServiciosEspeciales;
    }

    public function darPorcentajeIncremento() {
        $porcentaje = 0;
        if($this->getServiciosEspeciales() == 1){
            $porcentaje = 15;
        }else if($this->getServiciosEspeciales() > 1){
            $porcentaje = 30;
        }
        return $porcentaje;
    }
}
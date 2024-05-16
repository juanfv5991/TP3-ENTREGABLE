<?php


class Viaje {
    private $coleccionPasajeros;
    private $costo;
    private $costosAbonados;
    private $cantidadMaximaPasajeros;

    public function __construct($vColeccionPasajeros, $vCosto, $vCostosAbonados, $vCantidadMaximaPasajeros)
    {
        $this->coleccionPasajeros = $vColeccionPasajeros;
        $this->costo = $vCosto;
        $this->costosAbonados = $vCostosAbonados;
        $this->cantidadMaximaPasajeros = $vCantidadMaximaPasajeros;
    }

    // getting

    public function getColeccionPasajeros() {
        return $this->coleccionPasajeros;
    }
    public function getCosto() {
        return $this->costo;
    }
    public function getCostosAbonados() {
        return $this->costosAbonados;
    }
    public function getCantidadMaximaPasajeros() {
        return $this->cantidadMaximaPasajeros;
    }

    // setting

    public function setColeccionPasajeros($vColeccionPasajeros) {
        return $this->coleccionPasajeros = $vColeccionPasajeros;
    }
    public function setCosto($vCosto) {
        return $this->costo = $vCosto;
    }
    public function setCostosAbonados($vCostosAbonados) {
        return $this->costosAbonados = $vCostosAbonados;
    }

    

    public function __toString()
    {
        $cadena = "----------> PASAJEROS <----------\n\n";
        foreach ($this->getColeccionPasajeros() as $pasajero){
            $cadena .= $pasajero->__toString();
        }
        $cadena .="\n----------------------------\nCosto del Viaje: $".$this->getCosto();
        $cadena .="\nSuma de los costos de los pasajeros: $".$this->getCostosAbonados();
        return $cadena;
    }

    public function venderPasaje($objPasajero){
        if(count($this->getColeccionPasajeros()) < $this->getCantidadMaximaPasajeros()){
            $this->getColeccionPasajeros()[] = $objPasajero;
            $costoPasajero = $this->getCosto() + ($this->getCosto()*($objPasajero->darPorcentajeIncremento()/100));
            $nuevoCostoAbonado = $this->getCostosAbonados() + $this->getCosto(); 
            $this->setCostosAbonados($nuevoCostoAbonado);
        }
        return $costoPasajero;
    }

    public function hayPasajesDisponibles() {
        $espacio = false;

        if(count($this->getColeccionPasajeros()) < $this->getCantidadMaximaPasajeros()){
            $espacio = true;
        }
        return $espacio;
    }
}
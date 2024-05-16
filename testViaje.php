<?php

include_once ("Viaje.php");
include_once("PasajeroNecesidadesEspeciales.php");
include_once("PasajeroVIP.php");
include_once("Pasajero.php");

$pasajero1 = new Pasajero("Juan", 12, 352);
$pasajero2 = new PasajeroVIP("Carlos", 13, 358, 8767643, 300);
$pasajero3 = new PasajeroNecesidadEspeciales("Raúl", 17, 360, 2);
$viaje = new Viaje([$pasajero1, $pasajero2, $pasajero3], 500, 1500, 5);
$pasajero4 = new Pasajero("Franco", 14, 362);
$viaje1 = $viaje->hayPasajesDisponibles();
if($viaje1==true){
    $estado = "Hay lugar disponible";
}else{
    $estado = "No hay lugar disponible";
}
echo "Estado de disponibilidad: ".$estado;
<?php

require_once 'Pasajero.php';
require_once 'ResponsableV.php';

class Viaje {
    public $codigo;
    public $destino;
    public $cantidadMaximaPasajeros;
    public $pasajeros = array();
    public $responsable;

    function __construct($codigo, $destino, $cantidadMaximaPasajeros, $responsable) {
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajeros;
        $this->responsable = $responsable;
    }

    function modificarDestino($destino) {
        $this->destino = $destino;
    }

    function modificarCantidadMaximaPasajeros($cantidadMaximaPasajeros) {
        $this->cantidadMaximaPasajeros = $cantidadMaximaPasajeros;
    }

    function agregarPasajero($nombre, $apellido, $numeroDocumento, $telefono) {
        // Verificar si el pasajero ya está cargado en el viaje
        foreach ($this->pasajeros as $pasajero) {
            if ($pasajero->numeroDocumento == $numeroDocumento) {
                echo "El pasajero ya está cargado en el viaje.\n";
                return;
            }
        }

        // Verificar si la cantidad máxima de pasajeros se ha alcanzado
        if (count($this->pasajeros) >= $this->cantidadMaximaPasajeros) {
            echo "No se puede agregar más pasajeros, la cantidad máxima ha sido alcanzada.\n";
            return;
        }

        // Agregar el pasajero al viaje
        $this->pasajeros[] = new Pasajero($nombre, $apellido, $numeroDocumento, $telefono);
        echo "Pasajero agregado al viaje.\n";
    }

    function modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono) {
        foreach ($this->pasajeros as $pasajero) {
            if ($pasajero->numeroDocumento == $numeroDocumento) {
                $pasajero->nombre = $nombre;
                $pasajero->apellido = $apellido;
                $pasajero->telefono = $telefono;
                echo "Datos del pasajero actualizados.\n";
                return;
            }
        }
        echo "No se encontró ningún pasajero con ese número de documento.\n";
    }

    function mostrarDatos() {
        echo "Código del viaje: " . $this->codigo . "\n";
        echo "Destino: " . $this->destino . "\n";
        echo "Cantidad máxima de pasajeros: " . $this->cantidadMaximaPasajeros . "\n";
        echo "Responsable del viaje: " . $this->responsable->getNombre() . " " . $this->responsable->getApellido() . "\n";
        echo "Pasajeros del viaje:\n";
        foreach ($this->pasajeros as $pasajero) {
            echo "- Nombre: " . $pasajero->nombre . ", Apellido: " . $pasajero->apellido . ", Documento: " . $pasajero->numeroDocumento . ", Teléfono: " . $pasajero->telefono . "\n";
        }
    }
}

?>

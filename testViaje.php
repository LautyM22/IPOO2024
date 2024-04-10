<?php

// Requerir los archivos de las clases
require_once 'Viaje.php';
require_once 'ResponsableV.php';
require_once 'Pasajero.php';

// Crear instancia de la clase ResponsableV para el responsable del viaje
$responsable = new ResponsableV("123", "ABC", "Juan", "Perez");

// Crear instancia de la clase Viaje
$viaje = new Viaje("001", "Ciudad X", 20, $responsable);

// Menú
while (true) {
    echo "\n1. Cargar información del viaje\n";
    echo "2. Modificar destino\n";
    echo "3. Modificar cantidad máxima de pasajeros\n";
    echo "4. Agregar pasajero\n";
    echo "5. Modificar información de pasajero\n";
    echo "6. Mostrar datos del viaje\n";
    echo "7. Salir\n";

    $opcion = readline("Seleccione una opción: ");

    switch ($opcion) {
        case '1':
            $codigo = readline("Ingrese el código del viaje: ");
            $destino = readline("Ingrese el destino del viaje: ");
            $cantidadMaximaPasajeros = readline("Ingrese la cantidad máxima de pasajeros: ");
            $viaje = new Viaje($codigo, $destino, $cantidadMaximaPasajeros, $responsable);
            echo "Información del viaje cargada.\n";
            break;
        case '2':
            $destino = readline("Ingrese el nuevo destino: ");
            $viaje->modificarDestino($destino);
            break;
        case '3':
            $cantidadMaximaPasajeros = readline("Ingrese la nueva cantidad máxima de pasajeros: ");
            $viaje->modificarCantidadMaximaPasajeros($cantidadMaximaPasajeros);
            break;
        case '4':
            $nombre = readline("Ingrese el nombre del pasajero: ");
            $apellido = readline("Ingrese el apellido del pasajero: ");
            $numeroDocumento = readline("Ingrese el número de documento del pasajero: ");
            $telefono = readline("Ingrese el teléfono del pasajero: ");
            $viaje->agregarPasajero($nombre, $apellido, $numeroDocumento, $telefono);
            break;
        case '5':
            $numeroDocumento = readline("Ingrese el número de documento del pasajero que desea modificar: ");
            $nombre = readline("Ingrese el nuevo nombre del pasajero: ");
            $apellido = readline("Ingrese el nuevo apellido del pasajero: ");
            $telefono = readline("Ingrese el nuevo teléfono del pasajero: ");
            $viaje->modificarPasajero($numeroDocumento, $nombre, $apellido, $telefono);
            break;
        case '6':
            $viaje->mostrarDatos();
            break;
        case '7':
            exit();
        default:
            echo "Opción no válida.\n";
            break;
    }
}

?>

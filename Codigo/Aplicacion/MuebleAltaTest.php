<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';
use PHPUnit\Framework\TestCase;
AutoCargador::cargarModulos();

class MuebleAltaTest extends TestCase
{
    public function testAltaMueble()
    {
        // Crear una instancia del servicio de mueble
        $servicioMueble = new ServicioMueble();

        // Crear una conexión a la base de datos (ajusta los valores según tu configuración)
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'emueble';

        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        // Verificar si hay errores de conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }

        // Crear un nuevo mueble con valores válidos
        $alto = 0.95;
        $ancho = 1.00;
        $nombre = 'Futon MOCKUP';

        $nuevoMueble = new Mueble(null, 'Living', $nombre, $alto, $ancho);

        // Insertar el nuevo mueble en la base de datos utilizando el servicio
        $resultado = $servicioMueble->crear($nuevoMueble);

        // Verificar que el resultado sea una instancia de la clase Mueble y que tenga un ID válido
        $this->assertTrue($resultado);


        // Cerrar la conexión a la base de datos
        $conn->close();
    }
}
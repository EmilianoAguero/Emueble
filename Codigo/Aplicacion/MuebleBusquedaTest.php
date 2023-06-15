<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';
use PHPUnit\Framework\TestCase;
AutoCargador::cargarModulos();

class MuebleBusquedaTest extends TestCase
{
    public function testBusquedaMueble()
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

        // Término de búsqueda
        $terminoBusqueda = 'Futon';

        // Realizar la búsqueda de muebles utilizando el servicio
        $resultado = $servicioMueble->buscar($terminoBusqueda);

        // Verificar que el resultado sea un array (indicando que se encontraron resultados)
        $this->assertTrue(is_array($resultado));

        // Cerrar la conexión a la base de datos
        $conn->close();
    }
}
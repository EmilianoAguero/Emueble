<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';
use PHPUnit\Framework\TestCase;
AutoCargador::cargarModulos();

class MuebleBajaTest extends TestCase
{
    public function testBajaMueble()
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

        // ID del mueble a borrar (ajusta el valor según tu caso)
        $idMueble = 42;

        // Eliminar el mueble de la base de datos utilizando el servicio
        $resultado = $servicioMueble->borrar($idMueble);

        // Verificar que el resultado sea verdadero (true)
        $this->assertTrue($resultado);

        // Cerrar la conexión a la base de datos
        $conn->close();
    }


}
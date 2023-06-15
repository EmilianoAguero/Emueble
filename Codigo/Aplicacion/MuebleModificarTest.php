<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';
use PHPUnit\Framework\TestCase;
AutoCargador::cargarModulos();

class MuebleModificarTest extends TestCase
{ public function testModificacionMueble()
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

        // Crear un mueble existente con nuevos valores para la modificación
        $idMueble = 1;
        $nuevoNombre = 'Nuevo nombre';
        $nuevoAlto = 1.20;
        $nuevoAncho = 0.90;

        $muebleModificado = new Mueble($idMueble, 'Living', $nuevoNombre, $nuevoAlto, $nuevoAncho);

        // Modificar el mueble en la base de datos utilizando el servicio
        $resultado = $servicioMueble->modificar($muebleModificado);

        // Verificar que el resultado sea verdadero (true)
        $this->assertTrue($resultado);

        // Cerrar la conexión a la base de datos
        $conn->close();
    }
}
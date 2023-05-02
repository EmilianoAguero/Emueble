
<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';

AutoCargador::cargarModulos();

$service = new ServicioMueble();

$nuevo = new Mueble(NULL, 'Living', 'Futon moca', 0.95, 1.00);
$editado = new Mueble(42, 'Domitorio', 'Mesita de luz', 0.95, 0.95);

$result0 = $service->buscar("Futon");
$result1 = $service->crear($nuevo);
$result2 = $service->obtener(7);
$result3 = $service->modificar($editado);
$result4 = $service->borrar(6);

var_dump($result0);
var_dump($result1);
var_dump($result2);
var_dump($result4);

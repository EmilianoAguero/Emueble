<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;
include '../../config/inc_config.php';
include '../modelo/Autocargador.php';

AutoCargador::cargarModulos();

$service = new ServicioMueble();


if (isset($_GET['id'])) { 

    $Mueble=$service->obtener($_GET['id']);
   
 






  }
 





?>


<div class="container-fluid">
    <div id="seccionSuperior" class="form-row">
        <div class="col text-left">
            <h4> Borrar  MUEBLE</h4>
        </div>
    </div>
    <div id="seccionResultado"></div>
    <form id="formCrearAplicacion" action="./procesa/load_mueble_borrar.php" name="formCrearMueble" method="POST">
        <div class="card border-azul-clasico mt-3">
            <div class="card-header bg-azul-clasico text-white">Esta seguro que desea borrar el mueble <?= $Mueble->getNombre() ?></div>
            <div class="card-body">

            <input type="hidden" class="form-control mb-2" value=<?= $Mueble->getId()?>  name="id" id="id" minlength="3" maxlength="20"  required>
               
            </div>
        </div>
        <div class="form-row mt-2 mb-4">
            <div class="col text-right">
                <button type="submit" class="btn btn-success" href>
                     CONFIRMAR
                </button>
                <button type="button" class="btn btn-outline-info" onclick="window.location.assign('../../index.php')">
                    REGRESAR
                </button>
            </div>
        </div>
    </form>
</div>
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
<html>
<link rel="stylesheet" type="text/css" href="../../lib/bootstrap/css/bootstrap.css" />
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <!-- <img src="../../lib/img/Logo-UNPA-UARG-azul.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
                    Emueble - Gestion de Muebles
                </a>
            </div>
        </nav>


        <div class="container pt-2">
            <section id="main-content ">
                <article >
                    <div class="card ">
                        <div class="card-header">
                            <h3>Borrar Mueble</h3>
                        </div>
                        <div class="card-body">
                   
                        <div id="seccionResultado"></div>
                        <form id="formCrearAplicacion" action="./procesa/load_mueble_borrar.php" name="formCrearMueble" method="POST">

            <div class="alert alert-warning ">Esta seguro que desea borrar el mueble <strong> <?= $Mueble->getNombre() ?>  </strong> ?   </div>
  
            <input type="hidden" class="form-control mb-2" value=<?= $Mueble->getId()?>  name="id" id="id" minlength="3" maxlength="20"  required>
               
            </div>
        
        <div class="form-row mt-2 mb-4">
            <div class="col text-center">
                <button type="submit" class="btn btn-success" href>
                     CONFIRMAR
                </button>
                <button type="button" class="btn btn-primary" onclick="window.location.assign('../../index.php')">
                    REGRESAR
                </button>
            </div>
        </div>
    </form>    
                    </div>
                    </div>
                    </div>
                </article>
            </section>
        </div>
                    





</body>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>       

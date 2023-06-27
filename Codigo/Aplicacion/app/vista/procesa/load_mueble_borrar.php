<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;
include '../../../config/inc_config.php';
include '../../modelo/Autocargador.php';

AutoCargador::cargarModulos();



if (isset($_POST['id']))
{
    $service = new ServicioMueble();


    try {
        $resultado =  $service -> borrar($_POST['id']);
     


        if($resultado === true)
        {
            $string ='
      
            <html>
            <link rel="stylesheet" type="text/css" href="../../../lib/bootstrap/css/bootstrap.css" />
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
            <div class="card">
            <div class="card-header">
            <h3>Borrar mueble</h3>
            </div>
            <div class="card-body">
            <div class="alert alert-danger" role="alert">
            <h6> Error al eliminar el mueble , comuniquese con el Administrador</h6>
            </div>
            <button type="button" class="btn btn-outline-primary" onclick="window.location.assign("../../../index.php")>
            REGRESAR
            </button>
    
    
            </div>
            </div>
            <div>
            </div>
            </section
            </div>
            </body>
            <script src="../../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
            </html>
            ';
    
    
            echo  $string;
          
        }

   
      



    } catch (Exception $th) {

        $string ='
   
        <html>
        <link rel="stylesheet" type="text/css" href="../../../lib/bootstrap/css/bootstrap.css" />
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
        <div class="card">
        <div class="card-header">
        <h3>Borrar mueble</h3>
        </div>
        <div class="card-body">
        <div class="alert alert-success" role="alert">
        <h6> Error al eliminar el mueble , comuniquese con el Administrador</h6>
        </div>
        <button type="button" class="btn btn-outline-primary" onclick="window.location.assign("../../../index.php")>
        REGRESAR
        </button>


        </div>
        </div>
        <div>
        </div>
        </section
        </div>
        </body>
        <script src="../../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        </html>
        
        ';
        echo $string;
       


    }


}
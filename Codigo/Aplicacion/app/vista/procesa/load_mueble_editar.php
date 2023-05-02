<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;
include '../../../config/inc_config.php';
include '../../modelo/Autocargador.php';

AutoCargador::cargarModulos();



if (isset($_POST['nombre']))
{
    $service = new ServicioMueble();

    $nuevo = new Mueble($_POST['id'],$_POST['categoria'] ,$_POST['nombre'], $_POST['ancho'], $_POST['largo']);
    

    try {
        $service -> modificar($nuevo);


        $string ='
        <div>
            <h2> Se Modifico el mueble correctamente</h2>
            <button type="button" class="btn btn-outline-info" onclick="window.location.assign("../../../index.php")>
            REGRESAR
            </button>
        
        </div>
        
        ';


        echo  $string;
      



    } catch (Exception $th) {

        $string ='
        <div>
            <h2> Error al Modificar mueble , consulte con el administrador</h2>
            <button type="button" class="btn btn-outline-info" onclick="window.location.assign("../../../index.php")>
            REGRESAR
            </button>
        
        </div>
        
        ';
        echo $string;
       


    }


}
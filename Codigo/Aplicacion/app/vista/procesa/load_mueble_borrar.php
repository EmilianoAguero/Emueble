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
            <div>
                <h2> Se Elimino el mueble correctamente</h2>
                <button type="button" class="btn btn-outline-info" onclick="window.location.assign("../../../index.php")">
                REGRESAR
                </button>
            
            </div>
            
            ';
    
    
            echo  $string;
          
        }

   
      



    } catch (Exception $th) {

        $string ='
        <div>
            <h2> Error al Eliminar mueble , consulte con el administrador</h2>
            <button type="button" class="btn btn-outline-info" onclick="window.location.assign("../../../index.php")>
            REGRESAR
            </button>
        
        </div>
        
        ';
        echo $string;
       


    }


}
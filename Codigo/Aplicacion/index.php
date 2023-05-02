
<?php

use app\modelo\AutoCargador;
use app\modelo\Mueble;
use app\servicio\ServicioMueble;

include './config/inc_config.php';
include './app/modelo/Autocargador.php';

AutoCargador::cargarModulos();

$service = new ServicioMueble();



$resultado = $service->obtenertodos();



if (isset($_POST['nombre'])) { 
  $resultado=$service->buscar($_POST['nombre']);
    

}
else{
    $resultado = $service->obtenertodos();
}

 ?>






<html>  
<body style="background: #c2c2c2">  

<div><h1>Bienvenidos a Emueble</h1></div>


<div>
<h2> A continuacion se detalla el listado de Muebles:</h2>


</div>
<form id="formBuscarMueble"  name="formBuscarMueble" method="POST">
<div class="form-row">
                    <label for="nombreCorto" class="col-sm-2 col-form-label">* Nombre:</label>
                    <div class="col">
                        <input type="text" class="form-control mb-2" name="nombre" id="nombre"  placeholder="Nombre del mueble" required>
                    </div>
</div>                    
<button type="submit" class="btn btn-success" href>
                     Buscar
</button>
</form>


<div style="padding: 5px">
    <a href="./app/vista/page_mueble_crear.php">Nuevo Mueble +</a>
</div>

<div>


<table style="width: auto, hight: auto" align = "left" border = "1" cellpadding = "3" cellspacing = "2" >  
<thread>
<tr>  
<td> Nombre </td>  
<td> Categoria </td>  
<td> Largo </td>  
<td> Ancho </td>  
<td> Opciones </td>
</tr>
</thread>  
<tbody>
<?php
if($resultado === null)
{
 ECHO"<tr>No se encontraron resultados</tr>";
}
else{
foreach ($resultado as $Mueble ) {
     ?>
   <tr>
    <td class="table-light fw-light lh-1 text-center">
      <?php echo $Mueble->getNombre(); ?></td>
    <td class="table-light fw-light lh-1 text-center text-break">
      <?php echo $Mueble->getCategoria(); ?></td>
    <td class="table-light  fw-light lh-1 text-center text-break">
      <?php echo $Mueble->getLargo(); ?></td>
    <td class="table-light fw-light lh-1 text-center text-break text-capitalize">
      <?php echo $Mueble->getAncho(); ?></td>
    
    <td class="table-light fw-light">
      <button type="button" class="btn btn-xs btn-warning badge bg-warning text-wrap" onclick="window.location.assign('<?='./app/vista/page_mueble_editar.php?id='.$Mueble->getId() ?>')" style="width: 2rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path
            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
          </path>
          <path fill-rule="evenodd"
            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
          </path>
        </svg>
      </button>
      <button type="button" class="btn btn-xs  badge bg-danger text-wrap" onclick="window.location.assign('<?='./app/vista/page_mueble_borrar.php?id='.$Mueble->getId() ?>')" style="width: 2rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
          viewBox="0 0 16 16">
          <path
            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
          </path>
          <path fill-rule="evenodd"
            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
          </path>
        </svg>
      </button>
    </td>
  </tr>
  
  
  <?php 
       } }
     
      ?>
      </tbody>

</table>  
</div>


</body>  
<!-- <footer><h1>Todos los derechos reservados a los autores del proyecto</h1></footer> -->

</html>  

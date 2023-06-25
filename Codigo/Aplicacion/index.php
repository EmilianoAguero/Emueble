
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
<link rel="stylesheet" type="text/css" href="./lib/bootstrap/css/bootstrap.css" />


<style>
  .table-scrollable {
  overflow-y: auto;
  max-height: 600px;
  box-shadow: inset 0 0 5px rgba(150, 150 ,150,0.35);
  margin: auto;
}
</style>
<body >  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <!-- <img src="../../lib/img/Logo-UNPA-UARG-azul.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
                    Emueble - Gestion de Muebles
                </a>
            </div>
        </nav>

        <div class="container mt-2">
            <section id="main-content">
                <article>
                    <div class="card">
                        <div class="card-header">
                            <h3>Listado de Muebles</h3>
                        </div>
                        <div class="card-body">

                            <h5>Bienvenido</h5>
                            <p>Ingrese el nombre del Mueble que desea buscar.Recuerde respetar las mayusculas y minusculas al momento de realizar la busqueda</p>

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
                            <div class="btn"  style="padding: 5px">
                                <a class="btn btn-primary text-white" href="./app/vista/page_mueble_crear.php">Nuevo Mueble +</a>
                            </div>
                            </form>

                          

                            <!-- <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger" role="alert">
                                        <div class="row vertical-align">
                                            <div class="col-1 text-center">
                                                <i class="oi oi-info"></i>
                                            </div>
                                            <div class="col-11">
                                                <strong>Importante:</strong> Para acceder al sistema es necesario disponer de un correo de <a href="http://www.gmail.com" target="_blank">GMail</a>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="table-scrollable">


                            <table class="m-auto table table-striped table-hover table-responsive" >  

                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Largo</th>
                                <th scope="col">Ancho</th>
                                <th scope="col">Opciones</th>
                              </tr>
                            </thead>
                         
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
                                <td class=" text-center">
                                  <?php echo $Mueble->getNombre(); ?></td>
                                <td class="text-break">
                                  <?php echo $Mueble->getCategoria(); ?></td>
                                <td class="text-break">
                                  <?php echo $Mueble->getLargo(); ?></td>
                                <td class="text-capitalize">
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
                         
                        </div>
                    </div>
                </article>
            </section>
        </div>
        <footer class="footer">

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         Emueble © 2023  UNPA-UARG
         
        </div>
          
        </footer>


</body>  


    <script src="./lib/bootstrap/js/bootstrap.bundle.min.js"></script>
 

<!-- <footer><h1>Todos los derechos reservados a los autores del proyecto</h1></footer> -->

</html>  

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
                            <h3>Editar mueble</h3>
                        </div>
                        <div class="card-body">
                        <p>Modifique los campos a continuacion, recuerde que los campos con (*) son requeridos obligatoriamente</p>
                        <div id="seccionResultado"></div>
                            <form id="formCrearAplicacion" action="./procesa/load_mueble_editar.php" name="formCrearMueble" method="POST">
                           
                                    <input type="hidden" class="form-control mb-2" value=<?= $Mueble->getId()?>  name="id" id="id" minlength="3" maxlength="20"  required>
                                        <div class="form-row">
                                            <label for="nombreCorto" class="col-sm-2 col-form-label">Nombre: (*)</label>
                                            <div class="col">
                                                <input type="text" class="form-control mb-2" value="<?= $Mueble->getNombre()?>"  name="nombre" id="nombre" minlength="3"  placeholder="Nombre del mueble" required>
                                            </div>
                                            <label for="nombreLargo"  class="col-sm-2 col-form-label"> Categoria: (*)</label>
                                            <div class="col">
                                                <select type="text" style="width: auto" class="form-control mb-2"  value=<?= $Mueble->getCategoria()?> name="categoria" id="categoria" placeholder="Categoria del mueble" required>
                                                <option>Cocina</option>
                                                <option>Comedor</option>
                                                <option>Living</option>
                                                <option>Oficina</option>
                                                <option>Dormitorio</option>
                                                </select> 
                                            </div>
                                            <label for="nombreLargo"  class="col-sm-2 col-form-label"> Largo : (*)</label>
                                            <div class="col">
                                                <input type="number" class="form-control mb-2"  name="largo" id="largo" min="0" step="0.01"  value=<?=  number_format($Mueble->getLargo(), 2, '.', ',')?> placeholder="Largo del mueble" required>
                                            </div>
                                            <label for="nombreLargo"  class="col-sm-2 col-form-label"> Ancho: (*)</label>
                                            <div class="col">
                                                <input type="number"  class="form-control mb-2" name="ancho" id="ancho" min="0" step="0.01" value=<?= $Mueble->getAncho()?> placeholder="Ancho del mueble" required>
                                            </div>
                                        </div>
                                    
                                
                                <div class="form-row mt-2 mb-4">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success" href>
                                            GUARDAR
                                        </button>
                                        <button type="button" class="btn btn-primary" onclick="window.location.assign('../../index.php')">
                                            REGRESAR
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </article>
            </section>
        </div>                    
        </body>  







        
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- <footer><h1>Todos los derechos reservados a los autores del proyecto</h1></footer> -->

</html>  

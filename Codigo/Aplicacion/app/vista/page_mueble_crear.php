<div class="container-fluid">
    <div id="seccionSuperior" class="form-row">
        <div class="col text-left">
            <h4> CREAR MUEBLE</h4>
        </div>
    </div>
    <div id="seccionResultado"></div>
    <form id="formCrearAplicacion" action="./procesa/load_mueble_crear.php" name="formCrearMueble" method="POST">
        <div class="card border-azul-clasico mt-3">
            <div class="card-header bg-azul-clasico text-white">Complete el formulario</div>
            <div class="card-body">
                <div class="form-row">
                    <label for="nombreCorto" class="col-sm-2 col-form-label">* Nombre:</label>
                    <div class="col">
                        <input type="text" class="form-control mb-2" name="nombre" id="nombre" minlength="3" maxlength="20" placeholder="Nombre del mueble" required>
                    </div>
                    <label for="nombreLargo"  class="col-sm-2 col-form-label">* Categoria:</label>
                    <div class="col">
                        <select type="text" style="width: auto" class="form-control mb-2" name="categoria" id="categoria" placeholder="Categoria del mueble" required>
                        <option>Cocina</option>
                        <option>Comedor</option>
                        <option>Living</option>
                        <option>Oficina</option>
                        <option>Dormitorio</option>
                        </select> 
                    </div>
                    <label for="nombreLargo"  class="col-sm-2 col-form-label">* Largo :</label>
                    <div class="col">
                        <input type="number"  name="largo" id="largo" min="0" placeholder="Largo del mueble" required>
                    </div>
                    <label for="nombreLargo"  class="col-sm-2 col-form-label">* Ancho:</label>
                    <div class="col">
                        <input type="number"  name="ancho" id="ancho" min="0" placeholder="Ancho del mueble" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row mt-2 mb-4">
            <div class="col text-right">
                <button type="submit" class="btn btn-success" href>
                     GUARDAR
                </button>
                <button type="button" class="btn btn-outline-info" onclick="window.location.assign('../../index.php')">
                    REGRESAR
                </button>
            </div>
        </div>
    </form>
</div>
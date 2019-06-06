<form id="form-search-employee">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="id-employee">Buscar Empleado por ID</label>
                <input type="number" step="1" min="0" id="id-employee" name="idEmployee" class="form-control" placeholder="1">
            </div>
        </div>
        <div class="col-md-6">
            </br>
            <button id="search" type="submit" class="btn btn-info btn-round"><i class="fas fa-search"></i>Buscar</button>
        </div>
    </div>
</form>
<div class="row">
    <div class="col-md-12">
        <p><strong>Resultado de la búsqueda: </br></strong> {$searchResult}</p>
    </div>                
</div>
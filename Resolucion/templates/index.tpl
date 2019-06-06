{include file="header.tpl"}

<div class="container">
    <h1>Panel de administración</h1>
    <h2>Empresa: {$company->getName()}</h2>

    <h1>Panel de administración</h1>
    </br>

    <div class="row">
        <div class="col-md-6">
            <h2>Empresa: <small>{$company->getName()}</small></h2> 
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="id-employee">Buscar Empleado por ID</label>
                        <input type="number" step="1" id="id-employee" name="searchEmployee" class="form-control" placeholder="27">
                    </div>
                </div>
                <div class="col-md-6">
                    </br>
                    <button id="search" type="button" class="btn btn-info btn-round"><i class="fas fa-search"></i>Buscar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Resultado de la búsqueda</strong><span id="search-response">No se han realizado búsquedas</span></p>
                </div>                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="lista-empleados">
                {include file="employees.tpl"}
            </div>
        </div>
        <div class="col-md-6">
            <div id="form-content">
                </br></br></br>
                {include file="form.tpl"}
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}

<h4>Agregar Empleado</h4>

<form id="form-employee" action="" method="post">
<input type="number" name="idCompany" value="{$idCompany}" hidden/>
        
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Agustin">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="last-name">Apellido</label>
                <input type="text" id="last-name" name="lastName" class="form-control" placeholder="Meliendrez">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="age">Edad</label>
                <input type="number" step="1" min="1" id="age" name="age" class="form-control" placeholder="27">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type-employee">Tipo Empleado</label>
                <select name="typeEmployee" id="type-employee" class="form-control">
                    <option></option>
                    {foreach from=$typesEmployees item=typeEmployee}
                        <option value={$typeEmployee->getId()} > {$typeEmployee->getName()}</option>
                    {/foreach}        
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div id="type-design-selector" class="hidden">
                    <label for="type-design">Tipo Especialidad</label>
                    <select name="typeDesign" id="type-design" class="form-control" disabled>
                        <option></option>
                        {foreach from=$typesDesign item=typeDesign}
                            <option value={$typeDesign->getId()} > {$typeDesign->getName()}</option>
                        {/foreach}
                    </select>
                </div>
                <div id="type-language-selector">
                    <label for="type-language">Tipo Especialidad</label>
                    <select name="typeLanguage" id="type-language" class="form-control" disabled>
                        <option></option>
                        {foreach from=$typesLanguages item=typeLanguages}
                            <option value={$typeLanguages->getId()} > {$typeLanguages->getName()}</option>
                        {/foreach}                
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <button id="add-employee" type="button" class="btn btn-success btn-round">Guardar</button>
            <button id="clean-form" type="button" class="btn btn-secondary btn-round">Limpiar</button>
        </div>
        <div class="col-6">
            <div id="msj-error" class="alert alert-danger hidden" role="alert">
                Datos Incompletos
            </div>
        </div>
    </div>
</form>
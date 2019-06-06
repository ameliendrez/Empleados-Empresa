<h4>Agregar Empleado</h4>

<form id="form-employee" action="" method="post">
        
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
                <input type="number" step="1" id="age" name="age" class="form-control" placeholder="27">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="type-employee">Tipo Empleado</label>
                <select name="type-employee" id="typeEmployee" class="form-control">
                    <option></option>
                    <option value="1">Desarrollador</option>
                    <option value="2">Diseñador</option>
                    <!-- {foreach from=$canchas item=cancha}
                        <option value={$cancha->getId()} > {$cancha->getNombre()}</option>
                    {/foreach} -->
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="type-speciality">Tipo Especialidad</label>
                <select name="type-speciality" id="typeSpeciality" class="form-control" disabled>
                    <option></option>
                    <option value="1">PHP</option>
                    <option value="2">NET</option>
                    <option value="2">Phyton</option>
                    <!-- {foreach from=$canchas item=cancha}
                        <option value={$cancha->getId()} > {$cancha->getNombre()}</option>
                    {/foreach} -->
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button id="add-employee" type="button" class="btn btn-success btn-round">Guardar</button>
            <button id="clean-form" type="button" class="btn btn-secondary btn-round">Limpiar</button>
        </div>
    </div>
</form>
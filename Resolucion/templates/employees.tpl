<h3>Lista de empleados </h3> {* <span><button id="getEmployees" class="btn btn-info btn-round"><i class="fas fa-sync-alt"></i> Recargar</button></span> *}
</br>
<p><strong>Promedio de edad de los empleados: </strong> {$avg}</p>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Tipo empleado</th>
            <th>Especialidad</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$employees item=employee}
            <tr>
                <td>{$employee->getId()}</td>
                <td>{$employee->getLastName()}</td>
                <td>{$employee->getName()}</td>
                <td>{$employee->getAge()}</td>
                <td>{$employee->getTypeEmployee()->getName()}</td>
                <td>{$employee->getSpeciality()->getName()}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
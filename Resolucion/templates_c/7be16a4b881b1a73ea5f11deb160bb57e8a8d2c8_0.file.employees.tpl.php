<?php
/* Smarty version 3.1.30, created on 2019-06-06 20:42:06
  from "C:\xampp\htdocs\ejercicio\Empleados-Empresa\Resolucion\templates\employees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf95e7e577067_78995788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7be16a4b881b1a73ea5f11deb160bb57e8a8d2c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejercicio\\Empleados-Empresa\\Resolucion\\templates\\employees.tpl',
      1 => 1559846248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf95e7e577067_78995788 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>Lista de empleados </h3> 
</br>
<p><strong>Promedio de edad de los empleados: </strong> <?php echo $_smarty_tpl->tpl_vars['avg']->value;?>
</p>

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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'employee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getId();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getLastName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getAge();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getTypeEmployee()->getName();?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['employee']->value->getSpeciality()->getName();?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </tbody>
</table><?php }
}

<?php
/* Smarty version 3.1.30, created on 2019-06-06 21:30:03
  from "C:\xampp\htdocs\ejercicio\Empleados-Empresa\Resolucion\templates\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf969bb54a3a2_62075223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e60380fd44a397f71c4b44a2620063c8c9bbbd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejercicio\\Empleados-Empresa\\Resolucion\\templates\\form.tpl',
      1 => 1559849399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf969bb54a3a2_62075223 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4>Agregar Empleado</h4>

<form id="form-employee" action="" method="post">
<input type="number" name="idCompany" value="<?php echo $_smarty_tpl->tpl_vars['idCompany']->value;?>
" hidden/>
        
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typesEmployees']->value, 'typeEmployee');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeEmployee']->value) {
?>
                        <option value=<?php echo $_smarty_tpl->tpl_vars['typeEmployee']->value->getId();?>
 > <?php echo $_smarty_tpl->tpl_vars['typeEmployee']->value->getName();?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
        
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div id="type-design-selector" class="hidden">
                    <label for="type-design">Tipo Especialidad</label>
                    <select name="typeDesign" id="type-design" class="form-control" disabled>
                        <option></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typesDesign']->value, 'typeDesign');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeDesign']->value) {
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['typeDesign']->value->getId();?>
 > <?php echo $_smarty_tpl->tpl_vars['typeDesign']->value->getName();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
                <div id="type-language-selector">
                    <label for="type-language">Tipo Especialidad</label>
                    <select name="typeLanguage" id="type-language" class="form-control" disabled>
                        <option></option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typesLanguages']->value, 'typeLanguages');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeLanguages']->value) {
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['typeLanguages']->value->getId();?>
 > <?php echo $_smarty_tpl->tpl_vars['typeLanguages']->value->getName();?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
                
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
</form><?php }
}

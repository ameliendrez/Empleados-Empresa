<?php
/* Smarty version 3.1.30, created on 2019-06-06 20:45:43
  from "C:\xampp\htdocs\ejercicio\Empleados-Empresa\Resolucion\templates\searchResult.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf95f576d3757_09193918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb23f6034899119bdbb13b14cc956ae8a9032879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejercicio\\Empleados-Empresa\\Resolucion\\templates\\searchResult.tpl',
      1 => 1559846557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf95f576d3757_09193918 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
        <p><strong>Resultado de la búsqueda: </br></strong> <?php echo $_smarty_tpl->tpl_vars['searchResult']->value;?>
</p>
    </div>                
</div><?php }
}

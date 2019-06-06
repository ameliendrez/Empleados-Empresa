<?php
/* Smarty version 3.1.30, created on 2019-06-06 20:59:26
  from "C:\xampp\htdocs\ejercicio\Empleados-Empresa\Resolucion\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5cf9628eab4c62_38288670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd04582fde5ed22bd3f4b0771ddb9ddd30fe50cdb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ejercicio\\Empleados-Empresa\\Resolucion\\templates\\index.tpl',
      1 => 1559847555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:searchResult.tpl' => 1,
    'file:employees.tpl' => 1,
    'file:form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf9628eab4c62_38288670 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
    <h1>Panel de administración</h1>
    </br>

    <div class="row">
        <div class="col-md-6">
            <h2>Empresa: <small><?php echo $_smarty_tpl->tpl_vars['company']->value->getName();?>
</small></h2> 
        </div>
        <div class="col-md-6">
            <div id="searchFilter">
                <?php $_smarty_tpl->_subTemplateRender("file:searchResult.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div id="list-employees">
                <?php $_smarty_tpl->_subTemplateRender("file:employees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        <div class="col-md-6">
            <div id="form-content">
                </br></br></br>
                <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

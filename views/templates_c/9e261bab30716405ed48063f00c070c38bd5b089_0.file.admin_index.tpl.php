<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:18:15
  from 'C:\OpenServer\domains\myproject2\views\templates\pages\admin_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa8773f2c84_65062459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e261bab30716405ed48063f00c070c38bd5b089' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\pages\\admin_index.tpl',
      1 => 1529521326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa8773f2c84_65062459 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Pages</h3><br>
<table class="table table-striped" style="width: 400px;">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['pages'], 'page_data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page_data']->value) {
?>
        <tr>
            <td><b><?php echo $_smarty_tpl->tpl_vars['page_data']->value['title'];?>
</b></td>
            <td align="right">
                <a href="/admin/pages/edit/<?php echo $_smarty_tpl->tpl_vars['page_data']->value['id'];?>
"><button class="btn btn-sm btn-primary">edit</button></a>
                <a href="/admin/pages/delete/<?php echo $_smarty_tpl->tpl_vars['page_data']->value['id'];?>
" onclick="return confirmDelete();"><button class="btn btn-sm btn-warning">delete</button></a>
            </td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<br>

<div>
    <a href="/admin/pages/add/"><button class="btn btn-sm btn-success">New Page</button></a>
</div><?php }
}

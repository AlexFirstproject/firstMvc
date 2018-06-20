<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:19:05
  from 'C:\OpenServer\domains\myproject2\views\templates\contacts\admin_index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa8a99c82e9_74100390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49591a51fd10662ea695b2033b5cca20bae03e51' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\contacts\\admin_index.tpl',
      1 => 1529521817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa8a99c82e9_74100390 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Messages</h3><br>
<table class="table table-striped" style="width: 100%;">
    <tr>
        <td style="width: 5%;">#</td>
        <td style="width: 10%;">Name</td>
        <td style="width: 25%;">Email</td>
        <td style="width: 50%;">Message</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['message'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}

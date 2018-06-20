<?php
/* Smarty version 3.1.32, created on 2018-06-20 16:50:04
  from 'C:\OpenServer\domains\smarty\views\templates\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2a5b8c126f57_14705659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc76b96310ec0711692fcbe6d9b9751f6b50775' => 
    array (
      0 => 'C:\\OpenServer\\domains\\smarty\\views\\templates\\pages\\index.tpl',
      1 => 1529502602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2a5b8c126f57_14705659 (Smarty_Internal_Template $_smarty_tpl) {
?>This is the pages/index.html

<br/>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['pages'], 'page_data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page_data']->value) {
?>

    <div style="margin-top: 20px;">
        <a href="/pages/view/<?php echo $_smarty_tpl->tpl_vars['page_data']->value['alias'];?>
"><?php echo $_smarty_tpl->tpl_vars['page_data']->value['title'];?>
</a>
    </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

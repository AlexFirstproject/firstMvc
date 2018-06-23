<?php
/* Smarty version 3.1.32, created on 2018-06-23 23:57:40
  from 'C:\OpenServer\domains\myproject2\views\templates\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2eb444eeb4d8_80227790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d2eee27306b4b20d5cbe2725720fb4c291aa93b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\pages\\index.tpl',
      1 => 1529787457,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2eb444eeb4d8_80227790 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page'] != 1) {?> <li><a href="/pages?page=1" aria-label="Previous2">&lsaquo;&lsaquo;&lsaquo;</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page'] != 1) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']-1;?>
">&laquo;</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page']-2 >= 1) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']-2;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['page']-2;?>
</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page']-1 >= 1) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']-1;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['page']-1;?>
</a></li> <?php }?>
        <li class="active"><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
</a></li>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page']+1 <= $_smarty_tpl->tpl_vars['data']->value['quantityPages']) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']+1;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['page']+1;?>
</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page']+2 <= $_smarty_tpl->tpl_vars['data']->value['quantityPages']) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']+2;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['page']+2;?>
</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page'] != $_smarty_tpl->tpl_vars['data']->value['quantityPages']) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page']+1;?>
">&raquo;</a></li> <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value['page'] != $_smarty_tpl->tpl_vars['data']->value['quantityPages']) {?> <li><a href="/pages?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['quantityPages'];?>
" >&rsaquo;&rsaquo;&rsaquo;</a></li> <?php }?>
    </ul>
</nav>

<?php }
}

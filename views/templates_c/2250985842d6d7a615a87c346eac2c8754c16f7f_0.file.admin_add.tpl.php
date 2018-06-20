<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:18:56
  from 'C:\OpenServer\domains\myproject2\views\templates\pages\admin_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa8a029a3f0_41060367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2250985842d6d7a615a87c346eac2c8754c16f7f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\pages\\admin_add.tpl',
      1 => 1528468897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa8a029a3f0_41060367 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Add page</h3><br>
<form method="post" action="">
    <div class="form-group">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias" value="" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea id="content" name="content" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="is_pablished">Publish?</label>
        <input type="checkbox" name="is_pablished" id="is_pablished" checked/>
    </div>
    <input type="submit" class="btn btn-success" />
</form><?php }
}

<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:18:15
  from 'C:\OpenServer\domains\myproject2\views\templates\users\admin_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa8776eab68_06547622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b0b27265430251f93e3ac81b4f8476bcbb86a2e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\users\\admin_login.tpl',
      1 => 1528713310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa8776eab68_06547622 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Login</h3><br>
<form method="post" action="">
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" class="form-control"/>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" id="password" name="password" class="form-control"/>
    </div>
    <input type="submit" class="btn btn-success"/>
</form><?php }
}

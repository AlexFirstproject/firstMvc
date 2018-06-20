<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:18:34
  from 'C:\OpenServer\domains\myproject2\views\templates\contacts\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa88a5ec6b4_63938743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0abd6af99ab3e5047b3e2140bdd51ec0f4e35d09' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\contacts\\index.tpl',
      1 => 1528303057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa88a5ec6b4_63938743 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Contact us:</h3>
<form method="post" action="">
    <input type="text" class="form-control" name="name" placeholder="Your Name"><br>
    <input type="email" class="form-control" name="email" placeholder="Your Email"><br>
    <textarea class="form-control" name="message" placeholder="Your message"></textarea><br>
    <button type="submit" class="btn btn-lg btn-primary btn-block">Send</button>
</form><?php }
}

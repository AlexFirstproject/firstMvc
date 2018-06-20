<?php
/* Smarty version 3.1.32, created on 2018-06-20 22:18:15
  from 'C:\OpenServer\domains\myproject2\views\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2aa87751f383_14325548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91d2bc1b7039a2ebc5bb4963d0957c1fd64d3c9' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myproject2\\views\\templates\\admin.tpl',
      1 => 1529505896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b2aa87751f383_14325548 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo Config::get('site_name');?>
</title>
    <link rel="stylesheet" href="/webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="/webroot/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/webroot/css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><?php echo Config::get('site_name');?>
 - <?php echo __('lng_admin','Admin Section');?>
</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <?php if (Session::get('login')) {?>
            <ul class="nav navbar-nav">
                <li><a <?php if (App::getRouter()->getController() == 'pages') {?>class = 'activ'<?php }?> href="/admin/pages/">Pages</a></li>
                <li><a <?php if (App::getRouter()->getController() == 'contacts') {?>class = 'activ'<?php }?> href="/admin/contacts/">Contacts</a></li>
                <li><a href="/admin/users/logout">Logout</a></li>
            </ul>
            <?php }?>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        
        <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['flash']) {?>
            <div class="alert alert-info" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['flash'];?>

                <?php echo Session::delete('flash');?>

            </div>
        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>


        <br>
        <br>

        <?php echo __('lng.text','defaul value');?>
 --- запрос с имеющимся ключом в языковом списке есть и в en и в fr.<br>
        <?php echo __('lng.text2','defaul value');?>
 --- запрос с имеющимся ключом в языковом списке 2 есть только в fr в en будет выведен default текст.<br>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<?php echo '<script'; ?>
 src="/webroot/js/admin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/webroot/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

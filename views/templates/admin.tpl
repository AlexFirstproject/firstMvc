<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{Config::get('site_name')}</title>
    <link rel="stylesheet" href="/webroot/css/bootstrap.min.css">
    <link rel="stylesheet" href="/webroot/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/webroot/css/style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">{Config::get('site_name')} - {__('lng_admin','Admin Section')}</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            {if Session::get('login')}
            <ul class="nav navbar-nav">
                <li><a {if App::getRouter()->getController() == 'pages'}class = 'activ'{/if} href="/admin/pages/">Pages</a></li>
                <li><a {if App::getRouter()->getController() == 'contacts'}class = 'activ'{/if} href="/admin/contacts/">Contacts</a></li>
                <li><a href="/admin/users/logout">Logout</a></li>
            </ul>
            {/if}
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        {*<!--Второй способ вывода message-->
        <!--<?php if( Session::hasFlash() ){ ?>
            <div class="alert alert-info" role="alert">
                <?php Session::flash();
                      $_SESSION['flash'] = null; ?>
            </div>
        <?php } ?>-->*}

        {if $_SESSION['flash']}
            <div class="alert alert-info" role="alert">
                {$_SESSION['flash']}
                {Session::delete('flash')}
            </div>
        {/if}

        {$data.content}

        <br>
        <br>

        {__('lng.text', 'defaul value')} --- запрос с имеющимся ключом в языковом списке есть и в en и в fr.<br>
        {__('lng.text2', 'defaul value')} --- запрос с имеющимся ключом в языковом списке 2 есть только в fr в en будет выведен default текст.<br>
    </div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/webroot/js/admin.js"></script>
<script src="/webroot/js/bootstrap.min.js"></script>
</body>
</html>
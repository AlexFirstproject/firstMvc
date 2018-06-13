<?php

Config::set('site_name', 'Your site name');

Config::set('languages', array('en', 'fr'));

//Routes. Rout name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_languages', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'mvc');

Config::set('salt', 'jcb8732dsvds9efv7');
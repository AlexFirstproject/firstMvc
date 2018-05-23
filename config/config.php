<?php

Config::set('site_name', 'Your site name');

Config::set('languages', array('en', 'ua'));

//Routes. Rout name => method prefix
Config::set('routes', array(
    'default' => '',
    'admin'   => 'admin_',
));

Config::set('default_route', 'default');
Config::set('default_languages', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
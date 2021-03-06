<?php

spl_autoload_register(function ($class_name) {
    $lib_pach = ROOT . DS . 'lib' . DS . strtolower($class_name) . '_class.php';
    $controller_pach = ROOT . DS . 'controllers' . DS . str_replace('controller', '', strtolower($class_name)) . '_controller.php';
    $model_pach = ROOT . DS . 'models' . DS . strtolower($class_name) . '.php';

    if (file_exists($lib_pach)) {
        require_once($lib_pach);
    } elseif (file_exists($controller_pach)) {
        require_once($controller_pach);
    } elseif (file_exists($model_pach)) {
        require_once($model_pach);
    }
});

require_once(ROOT.DS.'config'.DS.'config.php'); // config\config.php

/*function __autoload($class_name)
{
    $lib_pach = ROOT . DS . 'lib' . DS . strtolower($class_name) . '_class.php';
    $controller_pach = ROOT . DS . 'controllers' . DS . str_replace('controller', '', strtolower($class_name)) . '_controller.php';
    $model_pach = ROOT . DS . 'models' . DS . strtolower($class_name) . '.php';

    if (file_exists($lib_pach)) {
        require_once($lib_pach);
    } elseif (file_exists($controller_pach)) {
        require_once($controller_pach);
    } elseif (file_exists($model_pach)) {
        require_once($model_pach);
    } //else {
//      throw new Exception('File to include class: '.$class_name);
//    }
}*/

function __($key, $default_value = ''){
    return Lang::get($key, $default_value);
}
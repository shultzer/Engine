<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    use Core\Lib\Autoloader;
    use Core\Lib\Router;

    require 'Core/web.php';
    require 'Core/Bootstrap.php';
    require 'Core/Lib/Autoloader.php';


    new Autoloader;

    new Router;
    var_dump(Router::$routes);

    $db = Db::getinstance($config);




<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);



    require 'Core/web.php';
    require 'Core/Bootstrap.php';
    require 'Core/Lib/Autoloader.php';

    new Autoloader;
    $db  = Db::getinstance()->db($config);
    $App = new Application;
    $App->run();




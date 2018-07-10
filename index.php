<?php

    use Core\Lib\Application;
    use Core\Lib\Db;

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require 'Core/Bootstrap.php';
        /*
         * Connect to database
         * */
    //$db  = Db::getinstance()->db($config);

    /*
     * Run application
     * */
    $App = new Application;
    $App->run();



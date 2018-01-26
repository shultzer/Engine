<?php

    use Core\Lib\Router;

    include 'Lib/Router.php';

    /*
     *
     * Add routes to array
     *
     * */

    Router::get('main', 'Maincontroller@index');
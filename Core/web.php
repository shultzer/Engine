<?php


    use Core\Lib\Application;


    /*
     *
     * Add routes to array
     *
     * */

    Application::get('', '\Controllers\Maincontroller@index');
    Application::get('another', 'Maincontroller@anotheraction');
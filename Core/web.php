<?php


    use Core\Lib\Application;


    /*
     *
     * Add routes to array
     *
     * */

    Application::get('', '\Controllers\Maincontroller@index');
    Application::get('remonline', '\Controllers\Maincontroller@remonline');
    Application::post('remonline', '\Controllers\Maincontroller@remonline');
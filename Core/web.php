<?php


    include 'Lib/Application.php';

    /*
     *
     * Add routes to array
     *
     * */

    Application::get('', 'Maincontroller@index');
    Application::get('another', 'Maincontroller@anotheraction');
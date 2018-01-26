<?php


    namespace Core\Lib;


    class Router
    {

        public $url;
        static $routes = [];

        public function __construct () {
            $this->url =  explode('/',parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        }

        public static function get ( $route = '', $action = '' ) {
            static::$routes['GET'][$route] = $action;
        }



    }
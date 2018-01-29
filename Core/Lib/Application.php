<?php

    namespace Core\Lib;

    class Application
    {

        protected $url;

        protected $controller;

        protected $action;

        static $routes = [];

        public function __construct () {

            $this->url = explode('/', parse_url($_SERVER[ 'REQUEST_URI' ], PHP_URL_PATH));
            isset($this->url[ 1 ]) ? $path = $this->url[ 1 ] : $path = '404';

            if ( $path != '404' && array_key_exists($path, static::$routes[ 'GET' ]) ) {

                list($this->controller, $this->action) = explode('@', static::$routes[ 'GET' ][ $path ]);

            }
            else {
                header("HTTP/1.0 404 Not Found");
                include 'views/errors/404.php';
               die();
            }


        }

        public static function get ( string $route, string $action ) {
            static::$routes[ 'GET' ][ $route ] = $action;
        }

        public static function post ( string $route, string $action ) {
            static::$routes[ 'POST' ][ $route ] = $action;
        }

        public function geturl () {

            return $this->url;
        }

        public function run () {
            $action     = $this->action;
            $controller = $this->controller;
            $app        = new $controller;
            $app->$action();
        }


    }
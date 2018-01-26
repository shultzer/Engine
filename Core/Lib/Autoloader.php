<?php


    namespace Core\Lib;


    class Autoloader
    {

        public function __construct () {

            spl_autoload_register([__CLASS__,'loadclass'],TRUE);


        }

        protected function loadclass ($class) {
            include $class.'.php';
        }


    }
<?php

    class Autoloader
    {

        public function __construct () {

            spl_autoload_register([__CLASS__, 'loadclass'], TRUE);


        }

        protected function loadclass ( $class ) {

            if (preg_match('/(controller)/', $class)) {
                include 'Controllers/' . $class . '.php';


            }
            else{
                include $class . '.php';

            }
        }


    }
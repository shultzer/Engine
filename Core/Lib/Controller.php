<?php


    namespace Core\Lib;


    class Controller
    {

        public function view ( string $filename, array $data ) {
            extract($data);
            require_once "views/{$filename}.php";

        }
    }
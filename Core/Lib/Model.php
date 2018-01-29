<?php

    namespace Core\Lib;


    class Model
    {
        protected $db;

        public function __construct ( $config ) {

            try {
                $this->db = new \PDO("mysql:dbname={$config['dbname']};host={$config['host']}", $config[ 'user' ], $config[ 'pwd' ]);
            } catch ( \PDOException $e ) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

        }
        public static function all ($db ) {
            return $db->query('SELECT * from test')->fetchAll();
        }
    }
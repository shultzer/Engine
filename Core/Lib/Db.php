<?php



    class Db
    {

        protected static $dbh;
        protected static $dsn;
        protected static $user;
        protected static $password;

        public function __construct (  ) {

        }

        public function __clone (  ) {

        }

        public static function getinstance ( $config ) {


            try {
                static::$dbh = new PDO("mysql:dbname={$config['dbname']};host={$config['host']}", $config['user'], $config['pwd']);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
        }
    }
<?php
    namespace Core\Lib;


    class Db
    {

        protected static $dbh;

        protected static $dsn;

        protected static $user;

        protected static $password;

        private function __construct () {

        }

        private function __clone () {

        }

        public static function getinstance () {
            if ( NULL === self::$dbh ) {
                self::$dbh = new self();
            }
            return self::$dbh;

        }

        public function db ( $config ) {
            try {
                return static::$dbh = new \PDO("mysql:dbname={$config['dbname']};host={$config['host']}", $config[ 'user' ], $config[ 'pwd' ]);
            } catch ( \PDOException $e ) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }
        }
    }
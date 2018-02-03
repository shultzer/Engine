<?php

    namespace Core\Lib;


    class Model
    {
        protected $db;
        protected $table;
        

        public static function all ($db ) {
            return $db->query('SELECT * from {$this->table}')->fetchAll();
        }

        public static function where ( $db, array $data ) {

            $res = $db->prepare("SELECT * from self::table WHERE ? = ?");
            $res->execute($data);
            return $res;
        }
    }
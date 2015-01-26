<?php

    /*
    Implements functions that every database adapter
    need to have to work with DbConnectionService properly
    */
    interface DbAdapterInterface
    {
        public static function connect();
        public static function findAll();
        public static function findOneByAttributes();
        public static function findByAttributes();
    }

?>
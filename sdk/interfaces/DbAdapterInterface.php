<?php
namespace Apison\Sdk\Interfaces;
    /*
    Implements functions that every database adapter
    need to have to work with DbConnectionService properly
    */
    interface DbAdapterInterface
    {
        public function connect();
<<<<<<< HEAD
        public function findAll($class);
        public function findOneByAttributes();
        public function findByAttributes();
=======
        public function findAll();
        public function findOneByAttributes($attributes);
        public function findByAttributes($attributes);
>>>>>>> 8014e71200441730bacccc131d20744aedb449ef
    }

?>
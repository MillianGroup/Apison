<?php
namespace Apison\Sdk\Interfaces;
    /*
    Implements functions that every database adapter
    need to have to work with DbConnectionService properly
    */
    interface DbAdapterInterface
    {
        public function connect();
        public function findAll();
        public function findOneByAttributes($attributes);
        public function findByAttributes($attributes);
    }

?>
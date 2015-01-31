<?php
namespace Apison\Sdk\Services\Database\Adapters;
    /*
    Implement methods to work with Mongo connection
    */
    class MongoAdapter
    {
        public function connect($configValues)
        {
            try {
                //$connect = new \mysqli($configValues['hostname'],$configValues['dbUser'],$configValues['dbPass'],$configValues['dbName']);
                return $connect;
            } catch (\MongoConnectionException $e) {
                echo "Mongo Adapter exception: " . $e->getMessage() . "\n";
            }
        }

        public function findAll($class)
        {
            $query = 'SELECT * FROM ' . $class;
            $results = MysqlAdapter::connect()->query($query);

            return $results;
        }

        public function findOneByAttributes()
        {
            $query = "SELECT * FROM ";
            $result = MysqlAdapter::connect()->query($query);

            return $result;
        }

        public function findByAttributes()
        {
            $query = "SELECT * FROM ";
            $results = MysqlAdapter::connect()->query($query);

            return $results;
        }
    }

?>
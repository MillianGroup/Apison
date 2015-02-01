<?php
namespace Apison\Sdk\Services\Database\Adapters;


    /*
    Implement methods to work with MySQL connection
    */
    class MysqlAdapter
    {
        public function connect($configValues)
        {
            try {
                $connect = new \mysqli($configValues['hostname'],$configValues['dbUser'],$configValues['dbPass'],$configValues['dbName'],$configValues['dbPort']);
                return $connect;
            } catch (\mysqli_sql_exception $e) {
                echo "MySQL Adapter exception: " . $e->getMessage() . "\n";
            }
        }

        public function findAll($class)
        {
            $query = 'SELECT * FROM `' . $class . '`';
            $results = MysqlAdapter::connect()->query($query);

            return $results;
        }

        public function findOneByAttributes($attributes, $class)
        {
            $query = 'SELECT * FROM `' . $class . '` WHERE ';
            $start = true;

            foreach($attributes as $key => $value)
            {
                if($start === false)
                {
                    $query .= ' AND ';
                }
                $query .= $key . ' = "' . $value . '"';
                $start = false;
            }
            $query .= ' LIMIT 1';
            $result = MysqlAdapter::connect()->query($query);

            return $result;
        }

        public function findByAttributes($attributes, $class)
        {
            $query = 'SELECT * FROM `' . $class . '` WHERE ';
            $start = true;

            foreach($attributes as $key => $value)
            {
                if($start === false)
                {
                    $query .= ' AND ';
                }
                $query .= $key . ' = "' . $value . '"';
                $start = false;
            }
            $results = MysqlAdapter::connect()->query($query);

            return $results;
        }
    }

?>
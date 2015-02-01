<?php
namespace Apison\Sdk\Services\Database\Adapters;


    /*
    Implement methods to work with MySQL connection
    */
    use Apison\Sdk\App;

    class MysqlAdapter
    {
        public $dbConn;
        public function connect($configValues)
        {
            try {
                $this->dbConn = new \mysqli($configValues['hostname'],$configValues['dbUser'],$configValues['dbPass'],$configValues['dbName'],$configValues['dbPort']);
                return $this->dbConn ;
            } catch (\mysqli_sql_exception $e) {
                echo "MySQL Adapter exception: " . $e->getMessage() . "\n";
            }
        }

        public function findAll($class)
        {
            $query = 'SELECT * FROM `' . $class . '`';
            return $this->dbConn->query($query);
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

            return $this->dbConn->query($query);
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
            return $this->dbConn->query($query);
        }
    }

?>
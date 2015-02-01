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
            $query = 'SELECT * FROM ' . $class;
            $results = $this->dbConn->query($query);

            return $results;
        }

        public function findOneByAttributes()
        {
            $query = "SELECT * FROM ";
            $result = $this->dbConn->query($query);

            return $result;
        }

        public function findByAttributes()
        {
            $query = "SELECT * FROM ";
            $results = $this->dbConn->query($query);

            return $results;
        }
    }

?>
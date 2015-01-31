<?php
namespace Apison\Sdk\Services\Database;

use Apison\Sdk\Interfaces\DbAdapterInterface;
use Apison\Sdk\Services\Database\Adapters\MysqlAdapter;
use Apison\Sdk\Services\Database\Adapters\MongoAdapter;
use Apison\Sdk\Services\Database\Adapters\PostgreAdapter;
use Apison\Sdk\Config\Config;
    /*
    Should take care about right connection to the database,
    takes care about changing the right database adapter
    Higher part of framework should communicate just with this class, not underlying classes.
    */
    class DbConnectionService implements DbAdapterInterface
    {


        public function __construct() {
             $this->adapter = null;
        }

        public function setAdapter($adapter = "mysql")
        {
            if($adapter === 'mysql') {
                $this->adapter = new MysqlAdapter();
            } else if($adapter === 'mongo') {
                $this->adapter = new MongoAdapter();
            } else if($adapter === 'postgre') {
                $this->adapter = new PostgreAdapter();
            } else {
                throw new \Exception("Unsupported database adapter was chosen.");
            }
        }

        public function connect()
        {
            return $this->adapter->connect(Config::getConfigValues());
        }

        public function findAll()
        {
            return $this->adapter->findAll(__CLASS__);
        }

        public function findOneByAttributes()
        {
            //TODO
        }

        public function findByAttributes()
        {
            //TODO
        }
    }

?>
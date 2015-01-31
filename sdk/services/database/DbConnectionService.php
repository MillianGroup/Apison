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
             $this->availibleAdapters = array(
                'mysql' => new MysqlAdapter(),
                'mongo' => new MongoAdapter(),
                'postgre' => new PostgreAdapter(),
            );
        }

        /*$mysqlAdapter = new MysqlAdapter();
        $mongoAdapter = new MongoAdapter();
        $postgreAdapter = new PostgreAdapter();*/


        public function setAdapter($adapter = "mysql")
        {
            $this->adapter = $this->availibleAdapters[$adapter];
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
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
    abstract class DbConnectionService implements DbAdapterInterface
    {

        private $adapter;
        private $availibleAdapters = array(
            'mysql' => MysqlAdapter,
            'mongo' => MongoAdapter,
            'postgre' => PostgreAdapter,
        );

        private function setAdapter($adapter)
        {
            $this->adapter = $this->availibleAdapters[$adapter] || $this->availibleAdapters["mysql"];
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

        public static function findByAttributes()
        {
            //TODO
        }
    }

?>
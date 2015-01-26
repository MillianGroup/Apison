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

        private static $adapter;
        private static $availibleAdapters = array(
            'mysql' => MysqlAdapter,
            'mongo' => MongoAdapter,
            'postgre' => PostgreAdapter,
        );

        private function setAdapter($adapter)
        {
            $this->adapter = $self->availibleAdapters[$adapter] || $self->availibleAdapters["mysql"];
        }

        public static function connect()
        {
            return $adapter::connect(Config::returnConfigValues());
        }

        public static function findAll()
        {
            return $adapter::findAll(__CLASS__);
        }

        public static function findOneByAttributes()
        {
            //TODO
        }

        public static function findByAttributes()
        {
            //TODO
        }
    }

?>
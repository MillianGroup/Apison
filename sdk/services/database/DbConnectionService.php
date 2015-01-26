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
        private $adapter;

        $availibleAdapters = array(
            'mysql' => MysqlAdapter,
            'mongo' => MongoAdapter,
            'postgre' => PostgreAdapter,
        );

        $configValues = Config::returnConfigValues();

        $this->setAdapter($this->configValues['adapter']);

        public function setAdapter($adapter)
        {
            $this->adapter = $availibleAdapters[$adapter] || $availibleAdapters["mysql"];
        }

        public static function connect()
        {
            $adapter::connect($configValues);
        }

        public static function findAll()
        {
            //TODO
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
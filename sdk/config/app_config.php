<?php
namespace Apison\Sdk\Config;

    class Config
    {
        private static $configValues = array(
            'adapter' => 'mysql',
            'hostname' => 'localhost',
            'dbPort' => '3306',
            'dbName' => 'apison',
            'dbUser' => 'root',
            'dbPass' => 'admin'
        );

        public static function getConfigValues()
        {
            return self::$configValues;
        }

    }

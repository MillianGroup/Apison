<?php
namespace Apison\Sdk\Config;

    class Config
    {
        public static $configValues = array(
            'adapter' => 'mysql',
            'hostname' => 'localhost',
            'dbPort' => '3306',
            'dbName' => 'apison',
            'dbUser' => 'root',
            'dbPass' => ''
        );

        public static function getConfigValues()
        {
            return self::$configValues;
        }

    }

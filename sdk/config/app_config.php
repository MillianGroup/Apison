<?php
namespace Apison/Sdk/Config;

    class Config
    {
        $configValues = array(
            'adapter' = "mysql",
            'hostname' = "localhost:80",
            'dbHost' = "localhost:3307",
            'dbName' => 'apison',
            'dbUser' => 'root',
            'dbPass' => 'admin'
        );

        public static function getConfigValues()
        {
            return $this->configValues;
        }

    }

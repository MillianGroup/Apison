<?php
namespace Apison/Sdk/Config;

    class Config
    {
        $adapter = "mysql";

        public static function getAdapter()
        {
            return $this->adapter;
        }

    }

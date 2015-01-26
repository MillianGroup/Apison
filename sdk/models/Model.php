<?php

    class Model extends DbConnectionService
    {
        public function __construct()
        {
            $this->setAdapter(Config::returnConfigValues()['adapter']);
            $dbConn = $this->connect();
        }
    }

?>
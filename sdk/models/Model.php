<?php

namespace Apison\Sdk\Models;

use Apison\Sdk\Services\DbConnectionService;

    class Model extends DbConnectionService
    {
        public function __construct()
        {
            $this->setAdapter(Config::getConfigValues()['adapter']);
            $dbConn = $this->connect();
        }
    }

?>
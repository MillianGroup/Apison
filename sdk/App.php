<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 31.1.2015
 * Time: 15:03
 */

namespace Apison\Sdk;

use Apison\Sdk\Services\Database\DbConnectionService;
use Apison\Sdk\Config\Config;
use Apison\Sdk\Services\ServiceRegistry;

class App {

    public function __construct()
    {
        $configValues = Config::getConfigValues();

        $dbConnectionService = new DbConnectionService($configValues);
        $dbConnectionService->setAdapter($configValues['adapter']);
        $dbConn = $dbConnectionService->connect();
        ServiceRegistry::registerService('db.connection-service', $dbConnectionService);
    }


} 
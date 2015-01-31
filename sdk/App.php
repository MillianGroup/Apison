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
        $dbConnectionService = new DbConnectionService();
        ServiceRegistry::registerService('db.connection-service', $dbConnectionService);

        $configValues = Config::getConfigValues();

        $dbConnectionService->setAdapter($configValues['adapter']);
        $dbConn = $dbConnectionService->connect($configValues);
    }


} 
<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 31.1.2015
 * Time: 15:03
 */

namespace Apison\Sdk;

use Apison\Sdk\Services\Database\DbConnectionService;

class App {

    $dbConnectionService = new DbConnectionService();
    ServiceRegistry::registerService('db.connection-service', $dbConnectionService);

    $configValues = Config::getConfigValues();

    $dbConnectionService->setAdapter($configValues['adapter']);
    $dbConnectionService->connect($configValues);

} 
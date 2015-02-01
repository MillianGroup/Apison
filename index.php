<?php
/**
 * Created by PhpStorm.
 * User: Michal
 * Date: 31.1.2015
 * Time: 15:28
 */
/*
 * This files will be loaded here
require_once "sdk/App.php";
require_once "sdk/config/app_Config.php";
require_once "sdk/interfaces/ModelSaveInterface.php";
require_once "sdk/interfaces/DbAdapterInterface.php";
require_once "sdk/services/database/adapters/MysqlAdapter.php";
require_once "sdk/services/database/adapters/MongoAdapter.php";
require_once "sdk/services/database/adapters/PostgreAdapter.php";
require_once "sdk/services/database/DbConnectionService.php";
require_once "sdk/models/Model.php";
require_once "sdk/services/ServiceRegistry.php";
*/

/* Calling autoload by composer */
require_once 'vendor/autoload.php';

$app = new \Apison\Sdk\App();
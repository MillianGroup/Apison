<?php

class ServiceRegistry
{
    private $services = array();

    public static function instance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new ServiceRegistry();
        }
        return $inst;
    }

    private function __construct()
    {
    }

    public function registerService($serviceName, Service $serviceObj)
    {
        $services[$serviceName] = $serviceObj;
    }

    public function getService($serviceName)
    {
        return $services[$serviceName];
    }

}
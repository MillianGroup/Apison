<?php

class ServiceRegistry
{
    private $services = array();

    public function registerService($serviceName, Service $serviceObj)
    {
        $services[$serviceName] = $serviceObj;
    }

    public function getService($serviceName)
    {
        return $services[$serviceName];
    }

}
<?php
namespace Apison\Sdk\Services;
class ServiceRegistry
{
    private static $services = array();

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

    public static function registerService($serviceName, $serviceObj)
    {
        $self->services[$serviceName] = $serviceObj;
    }

    public static function getService($serviceName)
    {
        return $self->services[$serviceName];
    }

}
<?php
namespace Apison\Sdk\Services\Database;
    /*
    Should take care about right connection to the database,
    takes care about changing the right database adapter
    Higher part of framework should communicate just with this class, not underlying classes.
    */
    class DbConnectionService implements DbAdapterInterface
    {
        public static function connect()
        {
            //TODO
        }

        public static function findAll()
        {
            //TODO
        }

        public static function findOneByAttributes()
        {
            //TODO
        }

        public static function findByAttributes()
        {
            //TODO
        }
    }

?>
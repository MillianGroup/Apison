<?php
/**
 * Created by PhpStorm.
 * User: František
 * Date: 2.2.2015
 * Time: 23:19
 */

class MysqlAdapterTest extends PHPUnit_Framework_TestCase
{
    public function testConnect()
    {
        $connect = new \mysqli("localhost","root","franky238","apison");

        return $connect;
    }
}
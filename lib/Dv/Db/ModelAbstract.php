<?php
namespace Dv\Db;

class ModelAbstract
{
    /** @var Connection $connection  */
    protected static $connection;

    /**
     * @return Connection
     */
    protected function getConnection()
    {
        if (!isset(self::$connection)) {
            self::$connection = new Connection();
        }
        return self::$connection;
    }
}
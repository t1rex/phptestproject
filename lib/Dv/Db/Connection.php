<?php
namespace Dv\Db;

/**
 * Class Connection
 *
 * class that connected to database
 *
 *@author Nazar
 *
 */
class Connection extends \PDO
{
    private $host;
    private $user;
    private $password;
    private $database;
    private $connection;

    public function __construct()
    {
        $connectionParameters = simplexml_load_file(__DIR__."/../../../app/dbconfig.xml");
        $this->host = $connectionParameters->hostname;
        $this->user = $connectionParameters->username;
        $this->password = $connectionParameters->password;
        $this->database = $connectionParameters->database;
        try {
            $this->connection = new \PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->password);
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $e) {
            echo 'Conection failed: ' . $e->getMessage();
        }
    }
}
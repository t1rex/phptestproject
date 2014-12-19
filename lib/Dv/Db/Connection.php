<?php
namespace Dv\Db;

class Connection extends \PDO
{
    protected $user = 'root';
    protected $pass = '1';
    protected $dsn = 'mysql:dbname=movie;host=localhost';

    /**
     * (PHP 5 &gt;= 5.1.0, PECL pdo &gt;= 0.1.0)<br/>
     * Creates a PDO instance representing a connection to a database
     * @link http://php.net/manual/en/pdo.construct.php
     * @param $dsn
     * @param $username [optional]
     * @param $passwd [optional]
     * @param $options [optional]
     */
    public function __construct($dsn = '', $username = '', $passwd = '', $options = array())
    {
        parent::__construct($this->dsn, $this->user, $this->pass, $options);
    }
}
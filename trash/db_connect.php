<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 12.12.14
 * Time: 14:00
 */

/**
 * Class ConnectToDB
 *
 * abstract class that connected to database
 *
 *@author Nazar
 *
 */
abstract class ConnectToDB
{
    protected $dbh = null;
    protected $user = 'root';
    protected $pass = '1';
    protected $dsn = 'mysql:dbname=movie;host=localhost';
    public function __construct()
    {
        if ($this->dbh === null) {
            try {
                $this->dbh = new PDO($this->dsn, $this->user, $this->pass);
            } catch (PDOException $e) {
                print "Error: " . $e->getMessage() . "<br/>";
            }
        }
    }
}
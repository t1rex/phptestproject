<?php
namespace Dv\Models;

//use Dv\Db\DataBaseHandler;
use Dv\Db\ModelAbstract;

class Fees extends ModelAbstract
{
    public function getFeesList()
    {
        $connection = $this->getConnection();
        $sql = "SELECT CONCAT(a.name, ' ', a.surname) AS `full name`, SUM(w.`fee`) AS 'fees', year(curdate())-year(a.`date_birth`) AS age
                FROM `work_actors` AS w
                  INNER JOIN `actors` AS a ON a.id = w.`actor_id`
                GROUP BY a.name
                HAVING age BETWEEN 40 AND 60;";
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll($connection::FETCH_ASSOC);
        return $result;
    }
}
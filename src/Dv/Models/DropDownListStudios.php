<?php
namespace Dv\Models;

use Dv\Db\ModelAbstract;

class DropDownListStudios extends ModelAbstract
{
    public  function getDropDownListStudios()
    {
        $connection  = $this->getConnection();
        $sql = "SELECT `title` FROM `studio`";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll($connection::FETCH_ASSOC);
        return $result;
    }
}
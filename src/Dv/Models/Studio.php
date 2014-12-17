<?php
namespace Dv\Models;

use Dv\Db\ModelAbstract;

class Studio extends ModelAbstract
{
    public function getActorInfo($studioTitle = 'Odessa Film Studio them. Dovzhenko')
    {
        $connection = $this->getConnection();
        $sql = "SELECT s.title AS title, CONCAT(a.`name`,' ', a.`surname`) AS full_name, COUNT(wa.film_id) as count_films
                FROM actors AS a
                    INNER JOIN work_actors AS wa ON a.id = wa.actor_id
                    INNER JOIN studio AS s ON s.id = wa.stud_id
                WHERE s.title LIKE :studio
                GROUP BY a.id";
        $stmt = $connection->prepare($sql);
        $studioTitle .= '%';
        $stmt->execute(array(':studio' => $studioTitle));

        $result = $stmt->fetchAll($connection::FETCH_ASSOC);
        return $result;
    }
}
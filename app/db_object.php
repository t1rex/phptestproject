<?php
/**
 * Created by PhpStorm.
 * User: Nazar
 * Date: 12.12.14
 * Time: 14:01
 */
include 'db_connect.php';

class DataBaseHandler extends ConnectToDB
{
    public $data;

    public function __construct()
    {
        parent::__construct();
    }

    public function getFees()
    {
        $this->data = [];
        $sql = "SELECT CONCAT(a.name, ' ', a.surname) AS `full name`, SUM(w.`fee`) AS 'fees', year(curdate())-year(a.`date_birth`) AS age
                FROM `work_actors` AS w
                  INNER JOIN `actors` AS a ON a.id = w.`actor_id`
                GROUP BY a.name
                HAVING age BETWEEN 40 AND 60;";

        $res=$this->dbh->query($sql);
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $row;
        }
        return $this->data;
    }

    public function getActorInfo($StudioTitle=null)
    {
        $title = 'Odessa Film Studio them. Dovzhenko';
        if (isset($StudioTitle)) {
            $title = $StudioTitle;
        }
        $this->data = [];
        $sql = "SELECT s.title AS title, CONCAT(a.`name`,' ', a.`surname`) AS full_name, COUNT(wa.film_id) as count_film
                FROM actors AS a
                    INNER JOIN work_actors AS wa ON a.id = wa.actor_id
                    INNER JOIN studio AS s ON s.id = wa.stud_id
                WHERE s.title LIKE '" .$title. "%'
                GROUP BY a.id";

        $res=$this->dbh->query($sql);
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $row;
        }
        return $this->data;
    }

    public function getNamesakes()
    {
        $this->data = [];
        $sql = "SELECT concat(name, ' ', surname) AS full_name FROM actors
                GROUP BY surname
                HAVING count(surname) < 2";

        $res=$this->dbh->query($sql);
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $row;
        }
        return $this->data;
    }

    public function getStudioFees()
    {
        $this->data = [];
        $sql = "SELECT  s.title AS studio_title, count(f.id) AS count_films, count(wa.fee) AS count_pays, sum(wa.fee) AS amount_of_fees, AVG(wa.fee) average_fee, (year(now())-f.`year`) as old
                FROM studio AS s
                  JOIN work_actors AS wa
                    ON s.id = wa.stud_id
                  JOIN films as f
                    ON (f.id = wa.film_id)
                GROUP BY studio_title
                HAVING old < 10";

        $res=$this->dbh->query($sql);
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $row;
        }
        return $this->data;
    }

    public function getTitlesOfStudio()
    {
        $this->data = [];
        $sql = "SELECT `title` FROM `studio`";

        $res=$this->dbh->query($sql);
        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            $this->data[] = $row;
        }
        return $this->data;
    }

    public function displayData($title, $titleViewTeamlate)
    {
        if ($this->data !== null){
            include 'views/display_' . $titleViewTeamlate . '.php';
        }else
        {
            echo 'data is null';
        }
    }
}
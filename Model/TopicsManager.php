<?php

declare(strict_types=1);

require_once 'Database.php';

class TopicsManager extends Database
{
    //retrieves all topics (table names) from database
    public function getTopics()
    {
        $db = $this->connect();
        $req = $db->prepare('SHOW tables FROM teaforum');
        $req->execute();
        return $req;    
    }
    //retrieve all posts for selected topic (get all records from database table)
    public function getTopic(string $pageName)
    {
        $db = $this->connect();
        $req = $db->prepare('SELECT * FROM ?');
        $req->execute(array($pageName));
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

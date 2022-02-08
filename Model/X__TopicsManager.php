<?php

declare(strict_types=1);

require_once 'Database.php';

class TopicsManager extends Database
{
    //retrieves all topics (table names) from database
    public function getCategories()
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT title FROM forumCategories");
        $req->execute();
        return $req;    
    }
    //retrieve all posts for selected topic (get all records from database table)
    public function getTopic(string $pageName)
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT * FROM $pageName");
        //$req->bindParam(1, $pageName, PDO::PARAM_STR);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
}

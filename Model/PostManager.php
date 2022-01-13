<?php

declare(strict_types=1);

require_once('Database.php');

class PostManager extends Database
{

    private $name;

    public function __construct(string $name = null)
    {
        $this->name = $name;
    }

    public function getPosts()
    {

        $db = $this->connect();

        $req = $db->query('SELECT * FROM forumtest');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPost(int $postId)
    {

        $db = $this->connect();
        $req = $db->prepare("SELECT name, text, signature FROM forumtest 
            WHERE id =" . $postId);
        //$req->bindParam(1, $this->postId, PDO::PARAM_STR);
        $req->execute();
        $post = $req->fetch();
        return $post;
    }
}

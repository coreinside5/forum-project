<?php

declare(strict_types=1);

require_once 'Database.php';

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

        $req = $db->query('SELECT * FROM teatypes');

        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPost(int $postId)
    {

        $db = $this->connect();
        $req = $db->prepare('SELECT name, text, signature FROM teatypes 
            WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();
        return $post;
    }
}


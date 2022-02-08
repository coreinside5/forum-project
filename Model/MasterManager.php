<?php

declare(strict_types=1);

require_once 'Database.php';

class MasterManager extends Database
{
    //retrieves all categories from database
    public function getCategories()
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT id, title FROM forumCategories");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    //retrieve all subcategories for passed category
    public function getSubcategories(int $categoryId)
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT id,title FROM forumSubcategories where idCategory = $categoryId");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getPosts(int $subcategoryId)
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT forumPosts.id, forumPosts.title, forumPosts.date, users.nick FROM forumPosts inner join users on forumPosts.idUser = users.id where forumPosts.idSubcategory = $subcategoryId and forumPosts.parentPost = 0");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getThreads(int $topicId, int $parentPost = 0)
    {
        $db = $this->connect();
        $req = $db->prepare("SELECT forumPosts.id, forumPosts.title, forumPosts.date, users.nick FROM forumPosts inner join users on forumPosts.idUser = users.id where forumPosts.id = $topicId and forumPosts.parentPost = $parentPost");
        $req->execute();
        $result = $req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getTopicThreads(){
        
    }
}

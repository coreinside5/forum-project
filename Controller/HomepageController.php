<?php
declare(strict_types = 1);

require_once './Model/PostManager.php';

class PostsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST) 
    {
        $posts = new PostManager();
       require './View/homepage.php';
    }
}

<?php

declare(strict_types=1);
require_once './Model/MasterManager.php';

class PostsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $masterManager = new MasterManager();
        require './View/posts.php';
    }
}

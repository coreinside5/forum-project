<?php
declare(strict_types = 1);

require_once './Model/PostManager.php';

class PostController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        header('Location: ./View/single-post.php?post_id=' . $id);
    }
}
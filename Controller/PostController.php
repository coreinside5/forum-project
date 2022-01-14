<?php

declare(strict_types=1);

require_once '../Model/PostManager.php';

if (isset($_GET['id']) && $_GET['id'] > 0) {
    class PostController
    {
        //render function with both $_GET and $_POST vars available if it would be needed.
        public function render(array $GET, array $POST)
        {
            $postManager = new PostManager();
            $post = $postManager->getPost((int)$_GET['id']);
            require '../View/single-post.php';
        }
    }
    $controller = new PostController();
    $controller->render($_GET, $_POST);
} else {
    echo 'Erreur : aucun identifiant de post envoyé';
}

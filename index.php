<?php

declare(strict_types=1);
//include all your controllers here
require './Controller/HomepageController.php';
//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
$controller = new PostsController();
/*if(isset($_GET['post']) && $_GET['post'] === 'post') {
    $controller = new PostController();
}*/
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            ////////////
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
            ///////////
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        
    }
    else {
        $controller->render($_GET, $_POST);
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

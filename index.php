<?php

declare(strict_types=1);
//include all your controllers here
require './Controller/HomepageController.php';
require './Controller/LoginController.php';
require './Controller/AboutController.php';
require './Controller/PostsController.php';
require './Controller/ThreadController.php';
//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller

/*if(isset($_GET['post']) && $_GET['post'] === 'post') {
    $controller = new PostController();
}*/
try {
    /*if (isset($_GET['action'])) {
        if ($_GET['action'] == 'posts') {
            $controller = new PostsController();
            $controller->render($_GET, $_POST);
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $controller = new PostController();
                $controller->render($_GET, $_POST);
            } else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
    } else {
        //$controller = new PostsController();
        //$controller->render($_GET, $_POST);
        $controller = new TopicsController();
        $controller->render($_GET, $_POST);
    }*/


    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'posts':
                $controller = new PostsController();
                $controller->render($_GET, $_POST);
                break;
            case 'login':
                $controller = new LoginController();
                $controller->render($_GET, $_POST);
                break;
            case 'about':
                $controller = new AboutController();
                $controller->render($_GET, $_POST);
                break;
            case 'main':
                $controller = new MasterController();
                $controller->render($_GET, $_POST);
                break;
            case 'threads':
                $controller = new ThreadController();
                $controller->render($_GET, $_POST);
                break;
            default:
                $controller = new MasterController();
                $controller->render($_GET, $_POST);
                break;
        }
    } else {
        $_GET['action'] = 'main';
        $controller = new MasterController();
        $controller->render($_GET, $_POST);
    }
} catch (Exception $e) {
    echo 'ErrMSG';
    echo 'Erreur : ' . $e->getMessage();
}

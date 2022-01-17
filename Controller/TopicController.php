<?php

declare(strict_types=1);

require_once './Model/TopicsManager.php';



class TopicController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $topicManager = new TopicsManager();
        print_r($_GET['pagename']);
        $topic = $topicManager->getTopic((string)$_GET['pagename']);
        //echo 'pass1';
        require './View/topic.php';
    }
}

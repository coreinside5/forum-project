<?php

declare(strict_types=1);

require_once './Model/TopicsManager.php';



class TopicController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $topicManager = new TopicsManager();
        $topic = $topicManager->getTopic((string)$_GET['pagename']);
        require './View/topic.php';
    }
}

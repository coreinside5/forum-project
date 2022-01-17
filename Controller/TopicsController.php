<?php

declare(strict_types=1);

require_once './Model/TopicsManager.php';



class TopicsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $topicsManager = new TopicsManager();
        $topics = $topicsManager->getTopics();
        require './View/topics.php';
    }
}

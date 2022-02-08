<?php

declare(strict_types=1);
//require_once './Model/PostManager.php';
require_once './Model/LoginManager.php';

class loginController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        require './View/login.php';
        $loginManager = new LoginManager();
        
    }
}


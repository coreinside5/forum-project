<?php

declare(strict_types=1);

session_start();

require_once 'Database.php';

class LoginManager extends Database {

    public function userExist (){

        $db = $this->connect();
        $req = $db->prepare("SELECT nick, password, email FROM users where nick = $_POST[login] and password = $_POST[pwd]");
        $req->execute();
        return $req;

    }

}
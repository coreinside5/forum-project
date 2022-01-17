<?php

declare(strict_types=1);

require_once 'Model/Database.php';

class dbexercice extends Database
{
    public function getForumPosts()
    {

        $db = $this->connect();
        //PDO Object ( ) 
        //echo 'printr output is :';
        //print_r($db);
        //VVV fatal error VVV
        //echo 'echo output is :';
        //echo $db;        
        //$req = $db->query('SELECT * FROM teatypes');
        //PDOStatement Object ( [queryString] => SELECT * FROM teatypes )
        //echo 'printr output is';
        //print_r($req);
        //VVV fatal error VVV
        //echo 'echo output is';
        //echo $req;
        
        //print_r($req->fetchAll(PDO::FETCH_ASSOC));
        //Array ( [0] => Array ( [id] => 1 [name] => Admin [text] => This is a first post in this forum. Be kind! [signature] => @dmin ) [1] => Array ( [id] => 2 [name] => user1 [text] => Salut, c'est mon premier post ici. [signature] => user1 ) [2] => Array ( [id] => 3 [name] => Teaman [text] => salut, quel type de thes preferez vous [signature] => te@man ) [3] => Array ( [id] => 4 [name] => Theiere [text] => Salut, moi j'aime noir. [signature] => thEiere ) ) 
        //print_r($req->fetchAll());
        //Array ( [0] => Array ( [id] => 1 [0] => 1 [name] => Admin [1] => Admin [text] => This is a first post in this forum. Be kind! [2] => This is a first post in this forum. Be kind! [signature] => @dmin [3] => @dmin ) [1] => Array ( [id] => 2 [0] => 2 [name] => user1 [1] => user1 [text] => Salut, c'est mon premier post ici. [2] => Salut, c'est mon premier post ici. [signature] => user1 [3] => user1 ) [2] => Array ( [id] => 3 [0] => 3 [name] => Teaman [1] => Teaman [text] => salut, quel type de thes preferez vous [2] => salut, quel type de thes preferez vous [signature] => te@man [3] => te@man ) [3] => Array ( [id] => 4 [0] => 4 [name] => Theiere [1] => Theiere [text] => Salut, moi j'aime noir. [2] => Salut, moi j'aime noir. [signature] => thEiere [3] => thEiere ) )

        //$req = $db->prepare('SELECT name, text, signature FROM teatypes WHERE id = ?');
        $req = $db->prepare('SELECT * FROM teatypes');
        print_r($req);
        $req->execute();
        //print_r($req);
        print_r($req->fetch(PDO::FETCH_ASSOC));
        //Array ( [id] => 1 [name] => Admin [text] => This is a first post in this forum. Be kind! [signature] => @dmin ) 
        
    }
    public function getRealIP()
    {
        if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $ip = $_SERVER["HTTP_CLIENT_IP"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_X_FORWARDED"])) {
            $ip = $_SERVER["HTTP_X_FORWARDED"];
        } elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])) {
            $ip = $_SERVER["HTTP_FORWARDED_FOR"];
        } elseif (isset($_SERVER["HTTP_FORWARDED"])) {
            $ip = $_SERVER["HTTP_FORWARDED"];
        } else {
            $ip = $_SERVER["REMOTE_ADDR"];
        }

        // Strip any secondary IP etc from the IP address
        //if (strpos($ip, ',') > 0) {
            //$ip = substr($ip, 0, strpos($ip, ','));
        //}
        return $ip;
    }
}
$exercice = new dbexercice;
//$exercice->getForumPosts();
print_r($exercice->getRealIP());


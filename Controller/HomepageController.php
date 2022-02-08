<?php

declare(strict_types=1);
require_once './Model/MasterManager.php';
require_once './Model/GetIp.php';

class MasterController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $masterManager = new MasterManager();
        $categories = $masterManager->getCategories();
        echo "PASS-1";
        print_r($categories);
        echo "PASS-2";
        foreach ($categories as $category){
            print_r($category);
        }        
        echo "PASS-3";
        $subcategories = array();
        print_r($subcategories);
        echo "PASS-4";       
        require './View/homepage.php';
    }
}


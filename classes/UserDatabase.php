<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/User.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/classes/Db.php';

class UsersDatabase extends DB

{
    function __construct()
    {
        $db = new DB();
    }

    
}

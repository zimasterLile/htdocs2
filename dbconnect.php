<?php

namespace Database;

class Database
{
    static public function connect()
    {
        $host = 'localhost';
        $database = 'banners';
        $user = 'root';
        $password = '';
        $link = mysqli_connect($host, $user, $password, $database);
        $link->set_charset('UTF-8');
        return $link;
    }
}
<?php


class Model
{
    public function get_data()
    {
        Database::connect();
    }
}

class Database
{
    static public function connect()
    {
        $host = 'localhost';
        $database = '#';
        $user = 'root';
        $password = '';
        $link = mysqli_connect($host, $user, $password, $database);
        $link->set_charset('utf8');
        return $link;
    }
}
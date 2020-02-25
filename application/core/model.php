<?php


class Model
{
    function __construct()
    {
        mysqli_set_charset($this->link = new mysqli(
            'localhost',
            'root',
            '',
            'vizitka'
        ), "utf8");
    }

    public function get_data($name_table)
    {
    }
}


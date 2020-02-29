<?php
class Model
{
    function __construct() {
        mysqli_set_charset($this -> link = new mysqli(
            'localhost',
            'root',
            '',
            'praktika_mvc'
        ), "utf8");
    }
}
?>
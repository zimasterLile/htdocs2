<?php
class Model
{
    function __construct() {
        mysqli_set_charset($this -> link = new mysqli(
            'localhost',
            'root',
            '',
            'praktika'
        ), "utf8");
    }

    public function get_data($name_table) //$name_table
    {
//        $name_table = 'portfolio';

        //'SELECT Name, Population FROM City ORDER BY Population DESC LIMIT 5'
        return mysqli_query($this -> link, "SELECT * FROM `$name_table`"); //`portfolio`


    }
}
?>
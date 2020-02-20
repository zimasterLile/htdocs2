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

    public function get_data($name_table)
    {
        //'SELECT Name, Population FROM City ORDER BY Population DESC LIMIT 5'
        return mysqli_query($this -> link, "SELECT * FROM `$name_table`"); //`portfolio`
    }

    public function del_data($name_table,$id) //, $id
    {
        //$id = $_POST['id'];

        $res =  mysqli_query($this -> link, "DELETE FROM `$name_table` WHERE `id` =".$id); //`portfolio`
        if(!$res) {
            die(mysqli_error($this->link));
        }
    }

    public function admin_start()
    {
//        if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'){
//            var_dump('Текущая сесия');
//            var_dump($_SESSION['admin']);
//        }
//        else{
//            $_SESSION['admin'] = 'admin';
//            var_dump('сесия запущена');
//        }
    }
}
?>
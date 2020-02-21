<?php

class Model_Portfolio extends Model
{
    public function get_data($name_table)
    {
        return mysqli_query($this->link, "SELECT * FROM `$name_table`");
    }

    public function del_data($name_table, $id)
    {
        $res = mysqli_query($this->link, "DELETE FROM $name_table WHERE id = $id");
        if (!$res) {
            die(mysqli_error($this->link));
        }
    }
}

?>
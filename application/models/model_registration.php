<?php
class Model_Registration extends Model
{

    public function adding_data($name_table,$login_user,$password_user)
    {
        $res =  mysqli_query($this -> link,
            "INSERT INTO `$name_table`(`login`, `password`)
                    VALUES ('$login_user','$password_user')");
        if(!$res) {
            die(mysqli_error($this->link));
        }
    }

}
?>

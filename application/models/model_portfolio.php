<?php
class Model_Portfolio extends Model
{
    public function get_data($name_table)
    {
        return mysqli_query($this -> link, "SELECT * FROM `$name_table`"); //`portfolio`
    }

    //-----------------------------------------------------------------------------------------

    public function del_data($name_table,$id)
    {
        $res =  mysqli_query($this -> link, "DELETE FROM `$name_table` WHERE `id` =".$id);
        if(!$res) {
            die(mysqli_error($this->link));
        }

    }

    public function adding_data($name_table,$year_portfolio,$site_portfolio,$description_portfolio)
    {
        $res =  mysqli_query($this -> link,
            "INSERT INTO `$name_table`(`year`, `site`, `description`)
                    VALUES ('$year_portfolio','$site_portfolio','$description_portfolio')");
        if(!$res) {
            die(mysqli_error($this->link));
        }
    }

    public function redact_data($name_table,$id_portfolio,$year_portfolio,$site_portfolio,$description_portfolio)
    {
        $res =  mysqli_query($this -> link,
            "UPDATE `$name_table` SET `year`=$year_portfolio,`site`='$site_portfolio',`description`='$description_portfolio' WHERE `id`=$id_portfolio");
        if(!$res) {
            die(mysqli_error($this->link));
        }
    }
}
?>
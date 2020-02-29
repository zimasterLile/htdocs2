<?php
    class Model_News extends Model
    {
        public function get_data($name_table)
        {
            return mysqli_query($this -> link, "SELECT * FROM `$name_table`");
        }

        //-----------------------------------------------------------------------------------------

        public function del_data($name_table,$id)
        {
            $res =  mysqli_query($this -> link, "DELETE FROM `$name_table` WHERE `id` =".$id);
            if(!$res) {
                die(mysqli_error($this->link));
            }

        }

        public function adding_data($name_table,$date_news,$title_news,$content_news)
        {
            $res =  mysqli_query($this -> link,
                "INSERT INTO `$name_table`(`date`, `title`, `content`)
                    VALUES ('$date_news','$title_news','$content_news')");
            if(!$res) {
                die(mysqli_error($this->link));
            }
        }

        public function redact_data($name_table,$id_news,$date_news,$title_news,$content_news)
        {
            $res =  mysqli_query($this -> link,
                "UPDATE `$name_table` SET `date`=$date_news,`title`='$title_news',`content`='$content_news' WHERE `id`=$id_news");
            if(!$res) {
                die(mysqli_error($this->link));
            }
        }

        public function adding_comment_data($name_table,$id_news,$id_user,$content)
        {
            $res =  mysqli_query($this -> link,
                "INSERT INTO `$name_table`(`id_news`, `id_user`, `content`)
                    VALUES ('$id_news','$id_user','$content')");
            if(!$res) {
                die(mysqli_error($this->link));
            }
        }

        public function del_comment_data($name_table,$id_comments)
        {
            $res =  mysqli_query($this -> link, "DELETE FROM `$name_table` WHERE `id_comments` =".$id_comments);
            if(!$res) {
                die(mysqli_error($this->link));
            }

        }
    }


?>

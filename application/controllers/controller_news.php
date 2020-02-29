<?php
require_once 'application/models/model_news.php';

class Controller_News extends Controller
{

    function __construct()
    {
        $this->model = new Model_News();
        $this->view = new View();

    }

    function action_index()
    {
        $model = new Model_News();

        $data_news = $model->get_data("news");
        $data_comment = $model->get_data("comments");

        $data = [$data_news,$data_comment];
        $this->view->generate('news_view.php', 'template_view.php', $data);

    }

    function action_new_comment()
    {
        $model = new Model_News();

        if (isset($_POST['button_news_adding'])) {
            $_POST['id_news'] = $_POST['id_news_input'];
            $_POST['id_user'] = $_POST['id_user_input'];
            $_POST['comment_news'] = $_POST['comment_news_input'];

            $model->adding_comment_data("comments",$_POST['id_news'], $_POST['id_user'],$_POST['comment_news']);
            header('Location: /news/');
        }
    }

    function action_del_comment()
    {
        $model = new Model_News();

        if (isset($_POST['button_comments_del'])) {
            $_POST['id_comments'] = $_POST['id_comments_input'];

            $model->del_comment_data("comments",$_POST['id_comments']);
            header('Location: /news/');
        }
    }

}

?>

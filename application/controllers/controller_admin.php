<?php
require_once 'application/models/model_portfolio.php';
require_once 'application/models/model_news.php';

class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();

    }

    function action_index()
    {
        $model = new Model_Portfolio();
        $data = $model->get_data("portfolio");

        $this->view->generate('admin_view.php', 'template_view.php', $data);
    }

    public function action_admin_start()
    {
        $model = new Model_Portfolio();

        if (isset($_POST, $_POST['button_admin'])) {
            $data = $model->get_data("user");
            $login = $_POST['loginAdmin'];
            $password = $_POST['passwordAdmin'];

            while ($row = mysqli_fetch_assoc($data)) {
                if ($login == $row['login'] && $password == $row['password'] && $row['status'] == 1){
                    $_SESSION['status'] = $row['login'] . '_admin';
                    $_SESSION['login'] = $row['login'];
                }
            }

            header('Location: /admin/');
        }
    }

    //PORTFOLIO---------------------------------------------------------------------------------------------------------

    public function action_del_data()
    {
        $model = new Model_Portfolio();

        if (isset($_POST['button_del_portfolio'])) {
            $_POST['id'] = $_POST['pole1'];
        }
        if (isset($_POST, $_POST['id'])) {
            if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                $model->del_data("portfolio", $_POST['id']);
                header('Location: /admin/');
            }
        }
    }

    public function action_adding_data()
    {
        $model = new Model_Portfolio();

        if (isset($_POST['button_adding_portfolio'])) {
            $_POST['year_portfolio'] = $_POST['year_portfolio_input'];
            $_POST['site_portfolio'] = $_POST['site_portfolio_input'];
            $_POST['description_portfolio'] = $_POST['description_portfolio_input'];

            if (!empty($_POST['year_portfolio']) && !empty($_POST['site_portfolio']) && !empty($_POST['description_portfolio'])){
                if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                    $model->adding_data("portfolio", $_POST['year_portfolio'], $_POST['site_portfolio'], $_POST['description_portfolio']);
                }
            }
            header('Location: /admin/');
        }
    }

    public function action_redact_data()
    {
        $model = new Model_Portfolio();

        if (isset($_POST['button_redact_portfolio'])) {
            $_POST['id_portfolio'] = $_POST['id_portfolio_redact'];
            $_POST['year_portfolio'] = $_POST['year_portfolio_redact'];
            $_POST['site_portfolio'] = $_POST['site_portfolio_redact'];
            $_POST['description_portfolio'] = $_POST['description_portfolio_redact'];

            if (!empty($_POST['id_portfolio']) && !empty($_POST['year_portfolio']) && !empty($_POST['site_portfolio']) && !empty($_POST['description_portfolio'])){
                if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                    $model->redact_data("portfolio", $_POST['id_portfolio'], $_POST['year_portfolio'], $_POST['site_portfolio'], $_POST['description_portfolio']);
                }
            }

            header('Location: /admin/');
        }
    }

    //NEWS--------------------------------------------------------------------------------------------------------------

    public function action_del_news_data()
    {
        $model = new Model_News();

        if (isset($_POST['button_del_news'])) {
            $_POST['id'] = $_POST['delete_news'];
            if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                $model->del_data("news", $_POST['id']);
            }
            header('Location: /admin/');
        }
    }

    public function action_adding_news_data()
    {
        $model = new Model_News();

        if (isset($_POST['button_adding_news'])) {
            $_POST['date_news'] = $_POST['date_news_input'];
            $_POST['title_news'] = $_POST['title_news_input'];
            $_POST['content_news'] = $_POST['content_news_input'];

            if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                $model->adding_data("news", $_POST['date_news'], $_POST['title_news'], $_POST['content_news']);
            }
            header('Location: /admin/');
        }
    }

    public function action_redact_news_data()
    {
        $model = new Model_News();

        if (isset($_POST['button_redact_news'])) {
            $_POST['id_news'] = $_POST['id_news_redact'];
            $_POST['date_news'] = $_POST['date_news_redact'];
            $_POST['title_news'] = $_POST['title_news_redact'];
            $_POST['content_news'] = $_POST['content_news_redact'];

            if(isset($_SESSION['status']) && $_SESSION['status'] == $_SESSION['login'] . '_admin') {
                $model->redact_data("news", $_POST['id_news'], $_POST['date_news'], $_POST['title_news'], $_POST['content_news']);
            }
            header('Location: /admin/');
        }
    }
}

<?php
class Controller_Registration extends Controller
{
    function __construct()
    {
        $this->model = new Model_Registration();
        $this->view = new View();

    }

    function action_index()
    {
        $this->view->generate('registration_view.php', 'template_view.php');
    }


    public function action_adding_data()
    {
        if (isset($_POST['button_adding_user'])) {
            $_POST['login_user'] = $_POST['login_user_input'];
            $_POST['password_user'] = $_POST['password_user_input'];
            $_POST['password_2_user'] = $_POST['password_2_user_input'];

            if ($_POST['password_user'] != $_POST['password_2_user']) {
                echo 'пароли не совподают';
            }
            else{
                $this->model->adding_data("user", $_POST['login_user'],$_POST['password_user']);
                header('Location: /');
            }

        }
    }

}

<?php
class Controller_Authorization extends Controller
{
    function __construct()
    {
        $this->model = new Model_Authorization();
        $this->view = new View();

    }

    function action_index()
    {
        //$data = $this->model->get_data("user");
        $this->view->generate('authorization_view.php', 'template_view.php'); //, $data
    }

    public function action_authorization_start()
    {
        if (isset($_POST, $_POST['button_authorization'])) {
            $data = $this->model->get_data("user");
            $login = $_POST['loginAuthorization'];
            $password = $_POST['passwordAuthorization'];

            while ($row = mysqli_fetch_assoc($data)) {
                if ($login == $row['login'] && $password == $row['password'] && $row['status'] == 0){
                    $_SESSION['status'] = $row['login'];
                    $_SESSION['login'] = $row['login'];
                    $_SESSION['user_id'] = $row['id'];
                    header('Location: /user/');
                }
            }

            if(isset($_SESSION['status'])){
                var_dump('Текущая сесия');
                var_dump($_SESSION['status']);
                var_dump($_SESSION['user_id'] . '- Текущий id');
            }
        }
    }
}
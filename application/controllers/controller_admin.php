<?php
class Controller_Admin extends Controller
{
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();

    }

    function action_index()
    {
        //$data = $this->model->get_data("user");
        $this->view->generate('admin_view.php', 'template_view.php'); //, $data
    }

    public function action_admin_start()
    {
        if (isset($_POST, $_POST['button_admin'])) {
            $data = $this->model->get_data("user");
            $login = $_POST['loginAdmin'];
            $password = $_POST['passwordAdmin'];

            while ($row = mysqli_fetch_assoc($data)) {
                if ($login == $row['login'] && $password == $row['password'] && $row['admin'] == 1){
                    $_SESSION['admin'] = $row['login'];
                }
            }

            if(isset($_SESSION['admin'])){
                var_dump('Текущая сесия');
                var_dump($_SESSION['admin']);
            }
        }
    }
}

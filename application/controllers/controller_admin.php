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
        $this->view->generate('admin_view.php', 'template_view.php');
    }

    public function action_admin_start()
    {
        if (isset($_POST, $_POST['button_admin'])) {

            if(isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin'){
                var_dump('Текущая сесия');
                var_dump($_SESSION['admin']);
            }
            else{
                $_SESSION['admin'] = 'admin';
                var_dump($_SESSION['admin'] . ' сесия запущена');
            }

            $this->model->admin_start();
        }
    }
}

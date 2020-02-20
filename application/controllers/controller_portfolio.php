<?php

class Controller_Portfolio extends Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();

    }

    function action_index()
    {
        $data = $this->model->get_data("portfolio");
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }


    public function action_del_data()
    {
        if (isset($_POST['button_id'])) {
            $_POST['id'] = $_POST['pole1'];
        }
        if (isset($_POST, $_POST['id'])) {
            $this->model->del_data("portfolio", $_POST['id']);
        }
    }
}

?>
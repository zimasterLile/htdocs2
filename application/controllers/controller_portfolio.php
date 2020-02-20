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
//        if (isset($_POST, $_POST['id'])) {
//            return $this->model->del_data("portfolio",3);
//        }
        return $this->model->del_data("portfolio",id);
    }
}

?>
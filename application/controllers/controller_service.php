<?php


class Controller_Service extends Controller
{
    function action_index()
    {
        $this->view->generate('service.php', 'main_page.php');
    }
}

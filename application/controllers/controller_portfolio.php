<?php


class Controller_Portfolio extends Controller
{
    function action_index()
    {
        $this->view->generate('portfolio.php', 'main_page.php');
    }
}

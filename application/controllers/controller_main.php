<?php

require_once 'application/components/db.php';

class Controller_Main extends Controller
{
    public function action_index()
    {
        Db::getConnection();
        $this->view->generate('main_view.php', 'template_view.php');
    }
}
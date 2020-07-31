<?php
require_once 'application/components/db.php';



class Controller_auth extends Controller{
    public function action_form()
    {
        $this->view->generate('auth_view.php','template_view.php');
    }

    public function action_auth()
    {
        $login = $_POST['login'];
        $password = $_POST['pass'];
        Db::getConnection();


        if (isset($_POST['login']) && isset($_POST['password'])){

        }
    }
}
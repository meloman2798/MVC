<?php
include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "models" . DIRECTORY_SEPARATOR . "model_contacts.php";
include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "application" . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR . "sql.php";
require_once 'application/components/db.php';
class Controller_Portfolio extends Controller
{

    function __construct()
    {
        $this->model = new Model_Portfolio();
        $this->view = new View();
    }

    function action_index()
    {
        $contacts = sql::select('contacts');
        if ($contacts === false){
            echo 'ERROR';
        }else{
            $this->view->renderObjects(['title'=>'Contacts','objects'=>$contacts]);
        }
        $data = $this->model->get_data();
        $this->view->generate('portfolio_view.php', 'template_view.php', $data);
    }



}
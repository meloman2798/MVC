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

  public function action_index()
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

    public function action_insert_form(){
        $this->view->generate('add_view.php', 'template_view.php');
    }
    public function action_insert(){

        $add = new Model_contacts();
        $add->load($_POST);
        $add->save();
    }

    public function action_delete(){

        if(isset($_POST['id']) && is_numeric($_POST['id'])){
            $product_id = $_POST['id'];
            $product = new Model_contacts();
            $product_template = $product->findOne(['id' => $product_id]);


            $product->load($product_template);

            $product->delete();

           return ' Запись удалена';
        }
        else {
            echo "Не вибран соответствующий продукт";
        }
    }

    function action_update_form()
    {
        $this->view->generate('update_view.php', 'template_view.php');
    }

    function action_update()
    {de($_POST);
        $product = new Model_contacts();// {title: null, price: null}
        $product->findOne(['id' => $_POST['id']]);// {title: qweqwe, price: 120}
        $product->load($_POST);
        $product->save();
    }
}


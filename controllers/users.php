<?php

class Users extends Base
{

    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->getModel("user");
        $this->user = User::getInstance();
    }

    protected function collectInfo()
    {
        parent::collectInfo();



        if (isset($_POST["edit"]))
        {
            switch($_POST["edit"])
            {
                case "new":
                    $this->user->addUser($_POST);
                    break;
                case "edit":
                    $this->user->editUser($_POST);
                    break;
                case "delete":
                    $this->user->deleteUser($_POST['id']);
                    break;
                default:
                    var_dump('DEFAULT');
                    break;
            }
        }

        if (isset($_GET['go']))
        {

            if (isset($_GET['id']))
            {
                $id = $_GET['id'];
                $this->data = $this->user->getUserInfo($id);
            }
            elseif(isset($_GET['edit'])) {

                switch($_GET['edit'])
                {
                    case "edit":
                        $id = $_GET['id'];
                        $this->data = $this->user->getUserInfo($id);
                        break;
                    case "new":
                    default:
                        $this->data = null;
                        break;
                }
            }
            else {
                $this->data = $this->user->getInformation();
            }
        }

        else
        {

            $this->data = $this->user->getInformation();
        }

    }

    protected function createPage() {

        $template = array("results" => $this->data, "urlBase" => Config::SITE_PREFIX);

        if (isset($_GET['edit'])) {

            if ($_GET['edit'] == 'new')
            {
                $this->content = $this->template("new", $template);
            }
            elseif ($_GET['edit'] == 'edit')
            {
                $this->content = $this->template("edit", $template);
            }
        }
        elseif(isset($_GET['id'])) {
            $this->content = $this->template("read", $template);
        }
        else {
            $this->content = $this->template("main", $template);
        }
        parent::createPage();
    }

}
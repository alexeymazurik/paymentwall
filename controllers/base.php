<?php

/**
* abstract class Base
* base class which prepare controllers work
*/
    abstract class Base extends Controller {
        protected $title;
        protected $content;

        protected $user;
        protected $results;

        function __construct()
        {
            $this->getModel("user");
            $this->user = User::getInstance();


            $this->title = "Paymentwall site";
        }
        protected function collectInfo()
        {

        }

        protected function createPage()
        {
            $template = array("title" => $this->title, "content" => $this->content, "user" => $this->user, "urlBase" => Config::SITE_PREFIX);
            echo $this->template("index", $template);
        }
    }
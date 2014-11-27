<?php

//    error_reporting(E_ALL);

    function __autoload($classname) {
        include_once('./controllers/' . strtolower($classname) . ".php");
    }
    include_once('./config/config.php');


    Router::go();
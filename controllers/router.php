<?php

    include_once("/config/config.php");

    class Router
    {
        private static function getAddress($addr)
        {
            $routes = [
                "",
                "users"
            ];

            $index = array_search($addr, $routes) || 0;

            return $routes[$index];
        }

        static function go($where = null)
        {
            if ($where) {
                header("Location: " . Config::SITE_PREFIX . "/" . self::getAddress($where));
            } else {
                $go = isset($_GET["go"]) ? $_GET["go"] : "";
                switch($go) {
                    case "users":
                    case "" :
                    default :
                        $page = new Users();
                        break;
                }
                $page->request();
            }
        }
    }
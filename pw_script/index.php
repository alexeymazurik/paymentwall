<?php

    include_once('../config/db.php');




    if (isset($_GET['user']) && isset($_GET['currency']) && isset($_GET['signature']) && isset($_GET['transaction_id']))
    {


        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($_GET['user']));
        $user = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();

        if (md5("user=".$user["id"]."currency=".$_GET['currency']."transaction_id=".$user["transaction_id"]) == $_GET['signature'] && isset($user))
        {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE users  set coins = ? WHERE id = ?";
            $q = $pdo->prepare($sql);
            $result = $_GET['currency'] + $user['coins'];
            $q->execute(array($result, $user['id']));
            if (isset($q)) {
                echo json_encode(array("status" => "Successfully added ".$_GET['currency']." coins to user ".$user['username']."."));
            }
            Database::disconnect();
        }
        else
        {
            echo json_encode(array("status" => "Signatures don't match"));
        }


    }
    else
    {
        echo json_encode(array("status" => "GET query input is incorrect"));
    }



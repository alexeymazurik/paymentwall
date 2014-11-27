<?php

include('config/db.php');

/**
 * class User
 * class which describes interaction with users
 */

class User {

    private static $instance;

    public static function getInstance()
    {
        $instance = null;

        if(self::$instance == null)
            $instance = new User();

        return $instance;
    }

    public function getInformation()
    {
        $pdo = Database::connect();
        $sql = 'SELECT * FROM users ORDER BY id';
        $result = $pdo->query($sql);
        Database::disconnect();
        return $result;
    }

    public function getUserInfo($id)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM users where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        return $data;
    }


    public function addUser($data)
    {
        var_dump($data);
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (username, email, password, transaction_id, coins) values(?, ?, ?, ?, ?)";
        $password = md5($data["password"]);
        $q = $pdo->prepare($sql);
        $q->execute(array($data["username"],$data["email"], $password, $data["transaction_id"], $data["coins"]));
        Database::disconnect();
    }



    public function deleteUser($id)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM users  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
    }

    public function editUser($data)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users  set username = ?, email = ?, coins =? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($data['username'], $data['email'], $data['coins'], $data['id']));
        Database::disconnect();
    }

    private function __construct()
    {

    }

}
<?php

require_once ("autoload.php");

class Users
{
    private $db;
    function __construct()
    {
        $obj = new Db();
        $this->db=$obj->connect();
    }

    function registration(){
        if (isset($_POST['register'])) {
            try {
                $select = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $select->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
                $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
                $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
                $select->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
                file_put_contents(ROOT.'/logs/error_logs', $e->getMessage());
            }
        }
    }
    function login(){
        if(isset($_POST['login'])) {
            try {
                $select = $this->db->prepare("SELECT * FROM users WHERE email= :email AND password= :password");
                $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
                $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
                $select->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
                file_put_contents(ROOT.'/logs/error_logs', $e->getMessage());
            }

            $userdata = $select->fetchAll();

        }
    }


    function isLogin(){
        return false;
    }
}



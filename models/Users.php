<?php

require_once ("autoload.php");

class Users
{
    private $db;
    function __construct()
    {
        $obj = new Database();
        $this->db=$obj->connect();
    }

    function registration(){
        if (isset($_POST['register'])) {
            try {
                $_POST['password']= password_hash(":password", PASSWORD_DEFAULT);

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
                $userRow = $select->fetch(PDO::FETCH_ASSOC);
                if($select->rowCount()>0){
                    if(password_verify(":password", $userRow['password'])){
                    return true;
                }else{
                    return false;
                    }
                }
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



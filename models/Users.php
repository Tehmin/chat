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
                $pass_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $select = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                $select->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
                $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
                $select->bindParam(":password", $pass_hash, PDO::PARAM_STR);
                if($select->execute() === true){
                    return true;
                }else{
                    return false;
                }





            } catch (PDOException $e) {
                return false;
                file_put_contents(ROOT.'/logs/error_logs', $e->getMessage());
            }
        }
    }
    function login(){
        if(isset($_POST['login'])) {
            try {
                $select = $this->db->prepare("SELECT * FROM users WHERE email= :email");
                $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
                $select->execute();
                $userRow = $select->fetch();

                if(password_verify($_POST['password'], $userRow['password'])){
                    return true;
                }else{
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                file_put_contents(ROOT.'/logs/error_logs', $e->getMessage());
            }



        }
    }

    function isLogin(){
        return false;
    }
}



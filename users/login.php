<?php
require_once ("db.php");

if(isset($_POST['login'])) {
    try {
        $select = $db->prepare("SELECT * FROM users WHERE email= :email AND password= :password");
        $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
        $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
        $select->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $userdata = $select->fetchAll();

}

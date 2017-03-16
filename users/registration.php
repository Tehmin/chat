<?php
require_once ("db.php");

if (isset($_POST['register'])) {
    try {
        $select = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $select->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
        $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
        $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
        $select->execute();


    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
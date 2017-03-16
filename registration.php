<?php

try {

    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );
    $db = new PDO("mysql:host=localhost;dbname=chat", "root", "", $options);
} catch (PDOException $error) {
    file_put_contents('error_logs', $error->getMessage());
}



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
/*if(isset($_POST['login'])) {
    try {
        $select = $db->prepare("SELECT * FROM users WHERE email= :email AND password= :password");
        $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
        $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
        $select->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $userdata = $select->fetchAll();
}

echo $count;
*/


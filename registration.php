<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=chat", "root", "" );
}catch (PDOException $error){
    file_put_contents('error_logs', $error->getMessage());
}

$count=$db->exec("INSERT INTO users(username, email) VALUES ($name, $email)");


try{
    $select = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    $select->bindParam(":username", $_POST['username'], PDO::PARAM_STR);
    $select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
    $select->bindParam(":password", $_POST['password'], PDO::PARAM_STR);
    $select->execute();
}catch (PDOException $e){
    echo $e->getMessage();
}


$select = $db->prepare("SELECT * FROM users WHERE email= :email AND pasword= :pasword");
$select->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
$select->bindParam(":pasword", $pasword, PDO::PARAM_STR);
$select->execute();


$userdata = $select->fetchAll();






echo $count;
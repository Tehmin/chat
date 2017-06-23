<?php
define('ROOT', __DIR__);
include_once (ROOT."/models/autoload.php");
$user = new Users();

if(isset($_POST["ajax"])){

    $action = $_POST["ajax"];
    if(method_exists($user, $action)){
        if($user->$action()){
            $response = ["success" => $action];
        }else{
            $response = ["error" => $action];
        }
    }else{
        $response = ["error" => "Method don't exists"];
    }

    $json = json_encode($response);
     echo $json;
       exit;
       echo "ok";
}

if(isset($_POST['ajax'])){
    $user = new Users();

/*
    if($_POST['ajax'] == "login"){
        $user->login();
    }elseif($_POST['ajax'] == 'registration'){
        $user->registration();
    }*/


    //

    $action = $_POST['ajax'];
    if(method_exists($user, $action)) {
        $user->$action();
    }else{
        $response = ['error' => 'Method dont exists'];
        echo json_encode($response);
    }

    exit;
}



if($user->isLogin()){
    //logged in
    include (ROOT."/views/chat.php");
}else{
    //not logged in
    include (ROOT."/views/login.php");
}


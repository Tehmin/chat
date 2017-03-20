<?php
define('ROOT', __DIR__);
include_once (ROOT."/models/autoload.php");
$user = new Users();

if(isset($_POST["ajax"])){

    /*
    if($_POST['ajax'] == "login"){
        $user->login();
    }elseif($_POST['ajax'] == 'registration'){
        $user->registration();
    }*/


    $action=$_POST["ajax"];
    if(method_exists($user, $action)){
        $user->$action();
        $response = ["success" => $action];
    }else{
        $response = ["error" => "Method don't exists"];
    }


    $json = json_encode($response);
    echo $json;
    exit;
}

if($user->isLogin()){
    include (ROOT."/views/chat.php");
}else{
    include (ROOT."/views/login.php");
}


<?php
define('ROOT', __DIR__);
include_once (ROOT."/models/autoload.php");
$user = new Users();


if($user->isLogin()){
    include (ROOT."/views/chat.php");
}else{
    include (ROOT."/views/login.php");
}
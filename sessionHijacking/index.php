<?php
session_start();
//Cookie Inspector
//$_SESSION = NULL;
if(empty($_SESSION['dono'])){
    $_SESSION['dono'] = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
}
$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
if($_SESSION['dono'] != $token){
    die("Acesso inválido!");
}

echo "Meu Sistema...";
print_r($_SESSION);
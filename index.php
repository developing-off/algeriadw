<?php
session_start();
include('config/pdo.php');
require_once('partials/_logos.php');
require_once('partials/_clients.php');
$url_root = 'https://'.$_SERVER['SERVER_NAME'].'/';

if(isset($_SESSION['logged_in'])){
    if ($_SESSION['info_stat'] == null) {
        if ($_SERVER['REQUEST_URI'] != "/register_complet") {
            header('Location:'.$url_root.'register_complet');
        }
    }elseif($_SESSION['info_stat'] == 1){
        if ($_SERVER['REQUEST_URI'] != "/") {
            header('Location:'.$url_root);
        }
    }
}else{
    if ($_SERVER['REQUEST_URI'] == "/register_complet") {
        header('Location:'.$url_root.'login');
    }
}

try{
    if(!empty($_GET['url'])){
        $url = explode("/", filter_var($_GET['request'],FILTER_SANITIZE_URL));
        //var_dump($url);    
        include('config/routes.php');
      
    }elseif(empty($_GET['url'])){
        include 'home.php';
       #include '404.php';
    }else{
        include 'error/404.php';
    }
}catch(Exception $e){
    $erreur =[
        "message" => $e->getMessage(),
        "code"=> $e->getCode()
    ];
    print_r($erreur);
}
?>
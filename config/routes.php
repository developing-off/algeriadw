<?php 
switch ($url[0]) {

case 'home':
    if (empty($url[1])) {
        include 'home.php';
    } else {
        $url1=$url[1];
        include 'home.php';
    }
break;
case 'themes':
    if(!isset($_SESSION['logged_in'])){
       header('Location:'.$url_root.'login');
    } else {
        if (empty($url[1])) {
            include 'template/theme.php';
        } else {
            $url1=$url[1];
            if($url1=='my-profile'){
                if(!empty($url[2])){
                    $url2=$url[2];
                    header('Location:'.$url_root.'themes/author-profile/'.$url2); 
                }else{
                    include 'profile/dash.php';
                }
            }elseif($url1=='settings-profile'){
                include 'profile/settings.php';
            } elseif($url1=='delete'){
                include 'template/delete.php';
            } else {
                include 'template/theme.php';
            }
        }
    }
break;
case 'terms':
    if (empty($url[1])) {
        include 'privacy/terms.php';
    } else {
        $url1=$url[1];
        include 'privacy/terms.php';
    }
break;
case 'login':
    if(!isset($_SESSION['logged_in'])){
            include 'auth/login.php';
    }else{
        header('Location:'.$url_root);
    }
break;
case 'register':
    if(!isset($_SESSION['logged_in'])){
        include 'auth/register.php';
    }else{
        header('Location:'.$url_root);
    }
break;
case 'register_complet':
    if (empty($url[1])) {
        include 'auth/register_complet.php';
    }
break;
case 'confirm':
    if (!empty($url[1])) {
        $url1=$url[1];
        include 'auth/confirm.php';
    }else{
        include 'error/404.php';
    }
break;
case 'already_confirm':
    if (empty($url[1])) {
        include 'auth/already_confirm.php';
    }
break;
case 'send_confirm':
    if (!empty($url[1])) {
        include 'auth/send_confirm.php';
    }else{
        include 'auth/send_confirm.php';
    }
break;
case 'error_confirm':
   
        include 'auth/error_confirm.php';
    
break;


case 'password-reset':
    if (empty($url[1])) {
        include 'auth/password-reset.php';
    }elseif(!empty($url[1]) && !empty($url[2])){
        $url1=$url[1];
        include 'auth/password-change.php';
    }elseif($url[1] == 'changed'){
        include 'auth/password-changed.php';
    }
break;
case 'logout':
    include 'auth/logout.php';
break;
default:
    include 'error/404.php';
break;
}

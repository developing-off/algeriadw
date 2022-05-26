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
case 'login':
    if (empty($url[1])) {
        include 'auth/login.php';
    }
break;
case 'register':
    if (empty($url[1])) {
        include 'auth/register.php';
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
    if (empty($url[1])) {
        include 'auth/error_confirm.php';
    }
break;

case 'password-reset':
    if (empty($url[1])) {
        include 'auth/password-reset.php';
    }else{
        $url1=$url[1];
       
        include 'auth/password-change.php';

    }
break;
default:
    include 'error/404.php';
break;
}
?>
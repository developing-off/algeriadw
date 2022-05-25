<?php 
switch ($url[0]) {
    case 'soon':
        include 'soon/index.php';
        break;
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
    }
break;
case 'password-reset':
    if (empty($url[1])) {
        include 'auth/password-reset.php';
    }
break;
default:
    include 'error/404.php';
break;
}
?>
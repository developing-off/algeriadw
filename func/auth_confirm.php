<?php
if(isset($url[1]) && (!isset($url[2]))){
    $token = $url[1];
    $code_confirm = NULL;
}else{
    $token = $url[2];
    $code_confirm = $url['1'];
    $sql = $pdo->prepare("SELECT * FROM `users_param` WHERE `token` = :token");
    $sql->bindParam(':token', $token);
    $sql->execute();
    $user_verf = $sql->fetch(PDO::FETCH_ASSOC);
    if(empty($user_verf)){
        header('Location: '.$url_root.'error_confirm');
    }
    if($user_verf['verify_stat'] == 1){
        header('Location: '.$url_root.'already_confirm');
    }elseif($user_verf['token'] == $token && $user_verf['verify_num'] == $code_confirm){
        $sql = $pdo->prepare("UPDATE `users_param` SET `verify_num` = NULL, `verify_stat` = 1 WHERE `token` = :token and `verify_num` = :code_confirm");
        $sql->bindParam(':token', $token);
        $sql->bindParam(':code_confirm', $code_confirm);
        $sql->execute();
        header('Location: '.$url_root.'login');
    }elseif($user_verf['token'] == $token && $user_verf['verify_num'] != $code_confirm){
        $error = "verification code not valid";
    }else{
        header('Location: '.$url_root.'confirm');
    }
}
$sql = $pdo->prepare("SELECT * FROM `users_param` WHERE `token` = :token");
$sql->bindParam(':token', $token);
$sql->execute();
$user_verf = $sql->fetch(PDO::FETCH_ASSOC);
if(empty($user_verf)){
    header('Location: '.$url_root.'error_confirm');
}
if($user_verf['verify_stat'] == 1){
    header('Location: '.$url_root.'already_confirm');
}
if(isset($_POST['otp_verf'])){
    $opt = $_POST['otp_code'];
    $otp_code = implode('',$opt);
    if(!is_numeric($otp_code)){
        $error = 'OTP code must be numeric';
    }else{
        $code_confirm = $otp_code;
        $sql = $pdo->prepare("SELECT * FROM `users_param` WHERE `token` = :token");
        $sql->bindParam(':token', $token);
        $sql->execute();
        $user_verf = $sql->fetch(PDO::FETCH_ASSOC);
        if(empty($user_verf)){
            header('Location: '.$url_root.'error_confirm');
        }
        if($user_verf['verify_stat'] == 1){
            header('Location: '.$url_root.'already_confirm');
        }elseif($user_verf['token'] == $token && $user_verf['verify_num'] == $code_confirm){
            $sql = $pdo->prepare("UPDATE `users_param` SET `verify_num` = NULL, `verify_stat` = 1 WHERE `token` = :token and `verify_num` = :code_confirm");
            $sql->bindParam(':token', $token);
            $sql->bindParam(':code_confirm', $code_confirm);
            $sql->execute();
            header('Location: '.$url_root.'login');
        }elseif($user_verf['token'] == $token && $user_verf['verify_num'] != $code_confirm){
            $error = "verification code not valid";
        }else{
            header('Location: '.$url_root.'confirm');
        }

    }
}
?>
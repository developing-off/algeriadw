<?php
require('mail/send_registercode.php');
$subject="Account Activation at AlgeriaDW";
$sql = $pdo->prepare("SELECT * FROM `users_param` WHERE `token` = :token");
$sql->bindParam(':token', $token);
$sql->execute();
$user_verf = $sql->fetch(PDO::FETCH_ASSOC);
$id = $user_verf['id_user'];
$sql = $pdo->prepare("SELECT * FROM `users_login` WHERE `id` = :id");
$sql->bindParam(':id', $id);
$sql->execute();
$user_info = $sql->fetch(PDO::FETCH_ASSOC);
$limit = 6;
$verify_number =  random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
if(empty($user_verf)){
    header('Location: '.$url_root.'error_confirm');
}
if($user_verf['verify_stat'] == 1){
    header('Location: '.$url_root.'already_confirm');
}elseif($user_verf['token'] == $token){
    $sql = $pdo->prepare("UPDATE `users_param` SET `verify_num` = :verify_number, `verify_stat` = 0 WHERE `token` = :token");
    $sql->bindParam(':token', $token);
    $sql->bindParam(':verify_number', $verify_number);
    $sql->execute();
    $name = $user_info['name'];
    $email = $user_info['email'];
    $code = $verify_number;
    send_registercode($email,$name,$code,$token,$subject);
    @$success = 'We’ve sent a verification code to your email.';
    
}

?>
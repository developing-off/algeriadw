<?php
require('mail/send_password-reset.php');
if(isset($_POST['pchange'])){
    $email = $_POST['email'];
    $sql = $pdo->prepare("SELECT * FROM users_login WHERE email = :email");
    $sql->execute(['email' => $email]);
    $user = $sql->fetch();
    $id = $user['id'];
    if(!empty($user)){
        $sql = $pdo->prepare("SELECT * FROM users_param WHERE id_user = :id");
        $sql->execute(['id' => $id]);
        $user_param = $sql->fetch();
        //
        $token = $user_param['token'];
        $limit = 8;
        $code =  random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
        //
        $sql = $pdo->prepare("SELECT * FROM users_password WHERE token = :token");
        $sql->execute(['token' => $token]);
        $user_password = $sql->fetch();
        if (empty($user_password)) {
            $sql = $pdo->prepare("INSERT INTO users_password (id_user,token,code) VALUES (:id,:token,:code)");
            $sql->execute(['id' => $id,'token' => $token,'code' => $code]);
        }else{
            $sql = $pdo->prepare("UPDATE users_password SET code = :code WHERE token = :token");
            $sql->execute(['code' => $code,'token' => $token]);
        }
        $subject = 'Reset password Account AlgeriaDW';
        send_password_reset($email,$code,$token,$subject);
        @$success = 'We have sent you an email with a link to reset your password.';
    }else{
        @$error = 'Email not found.';
    }
}
?>
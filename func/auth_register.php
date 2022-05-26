<?php
require('mail/send_registercode.php');
$subject="Account Activation at AlgeriaDW";
$token = bin2hex(openssl_random_pseudo_bytes(16));
$limit = 6;
$verify_number =  random_int(10 ** ($limit - 1), (10 ** $limit) - 1);
$root = $url_root . 'confirm/'.$token;
$fa_backup = NULL;
$verify_stat = 0;
if(isset($_POST['register_adw'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $password_confirm = md5($_POST['cpassword']);
    $username = $_POST['username'];
    $name = $_POST['name'];
    $terms = $_POST['terms_agree'];
    //
    if(empty($email)){
        @$error = "Email is required";
    }elseif(empty($password)){
        @$error = "Password is required";
    }elseif(empty($password_confirm)){
        @$error = "Confirm password is required";
    }elseif(empty($username)){
        @$error = "Username is required";
    }elseif(empty($name)){
        @$error = "Name is required";
    }elseif(empty($terms)){
        @$error = "You must agree to the terms and conditions";
    }elseif($password != $password_confirm){
        @$error = "Password and confirm password do not match";
    }else{
        $sql = "SELECT * FROM users_login WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email',$email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row){
            @$error = "Email already exists";
        }else{
            $sql = "INSERT INTO users_login (name,username,email,password) VALUES (:name,:username,:email,:password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':password',$password);
            $stmt->bindParam(':username',$username);
            $stmt->bindParam(':name',$name);
            $stmt->execute();
            $sql = "INSERT INTO users_param (id_user,token,fa_backup,verify_num) VALUES (:id_user,:token,:fa_backup,:verify_num)";
            $stmt2 = $pdo->prepare($sql);
            $id = $pdo->lastInsertId();
            $stmt2->bindParam(':id_user',$id);
            $stmt2->bindParam(':token',$token);
            $stmt2->bindParam(':fa_backup',$fa_backup);
            $stmt2->bindParam(':verify_num',$verify_number);
            $stmt2->execute();
            $code = $verify_number;
            send_registercode($email,$name,$code,$token,$subject);
            $success = "You have successfully registered";

            header("location: $root");
        }
    }

}
?>

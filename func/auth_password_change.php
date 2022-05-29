<?php
require('mail/send_password_changed.php');
$code = $url[1];
$token = $url[2];
$sql = "SELECT * FROM users_param WHERE token = :token";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':token',$token);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$sql = "SELECT * FROM users_password WHERE token = :token";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':token',$token);
$stmt->execute();
$chpass = $stmt->fetch(PDO::FETCH_ASSOC);
if (!empty($chpass)) {
    if (!empty($row)) {
        if (isset($_POST['change_password'])) {
            $sql = "SELECT * FROM users_login WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $row['id_user']);
            $stmt->execute();
            $users = $stmt->fetch(PDO::FETCH_ASSOC);
            $email = $users['email'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $hpassword = password_hash($password, PASSWORD_DEFAULT);
            $old_password = $users['password'];
            if (password_verify($password, $old_password)) {
                $error = "Old password is the same as new password";
               
            } else {
                $sql = "SELECT * FROM users_password WHERE token = :token";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':token', $token);
                $stmt->execute();
                $users_pass = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($users_pass['code'] == $code) {
                    if (date($users_pass['time_reset']) < date('Y-m-d H:i:s', strtotime('-2 hour'))) {
                        $error = "Password reset code has expired";
                    } else {
                        $sql = "UPDATE users_login SET password = :password WHERE id = :id";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':password', $hpassword);
                        $stmt->bindParam(':id', $row['id_user']);
                        $stmt->execute();
                        $sql = "DELETE FROM users_password WHERE token = :token";
                        $stmt = $pdo->prepare($sql);
                        $stmt->bindParam(':token', $token);
                        $stmt->execute();
                        $subject = "Password changed";
                        $success = "Password has been changed";
                        
                        send_password_change($email,$subject);
                     
                        header('location:' . $url_root . 'password-reset/changed');
                    }
                } else {
                    $error = "Invalid code";
                }
            }
        }
    } else {
        $error = "Invalid token";
    }
}else{
    $error = "Invalid token";
}
?>
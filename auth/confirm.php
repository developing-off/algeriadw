<?php
var_dump($url);
if(empty($url[1])){
    //header("Location:". $url_root);
}elseif(empty($url[2])){
    //header("Location:". $url_root);
}else{
    $code_confirm = $url['1'];
    $token = $url['2'];
    $sql = "SELECT * FROM users_param WHERE token = :token";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':token',$token);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row){
        $sql = "SELECT * FROM users_login WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$row['id_user']);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row){
            if($row['email_verified'] == 1){
                $error = "Email already verified";
            }else{
                if($row['verify_num'] == $code_confirm){
                    $sql = "UPDATE users_login SET email_verified = 1 WHERE id = :id";
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindParam(':id',$row['id']);
                    $stmt->execute();
                    $success = "Email verified";
                }else{
                    $error = "Invalid code";
                }
            }
        }else{
            $error = "Invalid code";
        }
    }else{
        $error = "Invalid code";
    }

}
?>
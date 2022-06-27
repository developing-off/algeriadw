<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) || empty($password)) {
        $error = 'All fields are required';
    } else {
        $sql = $pdo->prepare("SELECT
        user.id,
        user.name,
        user.username,
        user.email,
        user.password,
        user.register_date,
        userp.token,
        userp.fa_backup,
        userp.verify_stat,
        userp.terms_condition,
        useri.phone_number,
        useri.date_birth,
        useri.address,
        useri.country,
        useri.city,
        useri.info_stat,
        useri.subscr
        FROM users_login user
        LEFT JOIN 
        users_param userp ON user.id = userp.id_user
        LEFT JOIN
        users_info useri ON user.id = useri.id_user
        WHERE 
        user.email = :email ");
        $sql->execute(['email' => $email]);
        $users = $sql->fetch();
        if (!empty($users)) {
            if (password_verify($password,$users['password'])) {
                if ($users['verify_stat'] == 1) {
                    $_SESSION['id'] = $users['id'];
                    $_SESSION['name'] = $users['name'];
                    $_SESSION['username'] = $users['username'];
                    $_SESSION['email'] = $users['email'];
                    $_SESSION['register_date'] = $users['register_date'];
                    $_SESSION['token'] = $users['token'];
                    $_SESSION['fa_backup'] = $users['fa_backup'];
                    $_SESSION['verify_stat'] = $users['verify_stat'];
                    $_SESSION['terms_condition'] = $users['terms_condition'];
                    $_SESSION['phone_number'] = $users['phone_number'];
                    $_SESSION['date_birth'] = $users['date_birth'];
                    $_SESSION['address'] = $users['address'];
                    $_SESSION['country'] = $users['country'];
                    $_SESSION['city'] = $users['city'];
                    $_SESSION['subscribe'] = $users['subscr'];
                    $_SESSION['info_stat'] = $users['info_stat'];
                    $_SESSION['logged_in'] = true; 
                    header('Location:'.$url_root);
                } else {
                    $error = 'Please confirm your email address';
                }
            }else{
                $error = 'Email or password is incorrect';
            }
        }else{
            $error = 'Email or password is incorrect';
        }
    }
}

?>
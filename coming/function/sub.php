<?php

$email = $_POST['subscribe-form-email'];
    $country = $ipdat->geoplugin_countryName;
    $city = $ipdat->geoplugin_city;
    $currency = $ipdat->geoplugin_currencyCode;
    $ip = $ip;
    $sql=$pdo->prepare("select email FROM subscribers where email=? limit 1");
    $sql->execute(array($email));
    $email_check=$sql->fetchAll();
    $sql=$pdo->prepare("select ip FROM subscribers where ip=? limit 1");
    $sql->execute(array($ip));
    $ip_check=$sql->fetchAll();
    if(count($ip_check)>0) {
        header('Location: index&subscribed=false');
        exit;
    }
    elseif(count($email_check)>0){
        header('Location: index&subscribed=false');
        exit;
    }else{
        if(!empty($email)){
            $sql = "INSERT INTO `subscribers` (`email`, `country`, `city`, `currency`, `ip`) VALUES ('$email', '$country', '$city', '$currency', '$ip')";
            $query = $pdo->prepare($sql);
            $query->execute();
            send_notif($email);
            header('Location: index&subscribed=true');
            exit;
        }
    }
    ?>
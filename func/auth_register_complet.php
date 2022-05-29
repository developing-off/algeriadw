<?php
if(isset($_POST['info_comp'])){
    $address = $_POST['address'];
    $dof = $_POST['dof'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $id = $_SESSION['id'];
    $sql = $pdo->prepare("SELECT * FROM users_info WHERE id_user = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
    $count = $sql->rowCount();
    if($count == 0){
        $sql = $pdo->prepare("INSERT INTO users_info (id_user,phone_number,date_birth,address,country,city,info_stat) VALUES (:id,:phone,:dof,:address,:country,:city,1)");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':address',$address);
        $sql->bindValue(':dof',$dof);
        $sql->bindValue(':country',$country);
        $sql->bindValue(':city',$city);
        $sql->bindValue(':phone',$phone);
        $sql->execute();
        $_SESSION['info_stat'] = 1;
        $_SESSION['address'] = $address;
        $_SESSION['date_birth'] = $dof;
        $_SESSION['country'] = $country;
        $_SESSION['city'] = $city;
        $_SESSION['phone_number'] = $phone;
        echo("<script>location.href = '".$url_root."';</script>");
    }else{
        $sql = $pdo->prepare("UPDATE users_info SET address = :address, date_birth = :dof, country = :country, city = :city, phone_number = :phone WHERE id_user = :id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':address',$address);
        $sql->bindValue(':dof',$dof);
        $sql->bindValue(':country',$country);
        $sql->bindValue(':city',$city);
        $sql->bindValue(':phone',$phone);
        $sql->execute();
        $_SESSION['info_stat'] = 1;
        $_SESSION['address'] = $address;
        $_SESSION['date_birth'] = $dof;
        $_SESSION['country'] = $country;
        $_SESSION['city'] = $city;
        $_SESSION['phone_number'] = $phone;
        echo("<script>location.href = '".$url_root."';</script>");
    }

}
?>
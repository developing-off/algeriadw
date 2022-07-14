<?php 
$sql = $pdo->prepare("SELECT * FROM `themes_author` WHERE `id_user` = :user_id");
$sql->bindParam(":user_id", $_SESSION['id']);
$sql->execute();
$themes_author_check = $sql->fetchAll();
if(empty($themes_author_check)){
    if($_SESSION['gender'] == 'Men'){
        $default_profile =  rand(1,8);
        $default_img = 'https://api.algeriadw.studio/img/profile-default/JPG-men/profile-'.$default_profile.'.png';
    }elseif($_SESSION['gender'] == 'Women'){
        $default_profile = rand(9,15);
        $default_img = 'https://api.algeriadw.studio/img/profile-default/JPG-women/profile-'.$default_profile.'.png';
    }
    $sql = $pdo->prepare("INSERT INTO `themes_author` (id_user,name_author,followers,`img-profile`) VALUES (:user_id,:name_author,0,:default)");
    $sql->bindParam(":user_id", $_SESSION['id']);
    $sql->bindParam(":name_author", $_SESSION['username']);
    $sql->bindParam(":default", $default_img);
    $sql->execute();
    $_SESSION['name_author'] = $_SESSION['username'];
}else{
    $_SESSION['name_author'] = $themes_author_check[0]['name_author'];
    $_SESSION['date_join'] = $themes_author_check[0]['date_join'];
    $_SESSION['img-profile'] = $themes_author_check[0]['img-profile'];
}
#author info
$sql = $pdo->prepare("SELECT COUNT(*) FROM `themes` WHERE `author_id` = :user_id");
$sql->bindParam(":user_id", $themes_author_check[0]['id_user']);
$sql->execute();
$total_themes_author = $sql->fetchColumn();
#show themes in all categories by authors id 
$sql = $pdo->prepare("SELECT
theme.id,
theme.image_path,
theme.download_path,
theme.title,
theme.author_id,
theme.tags,
theme.technology,
theme.rate,
theme.price,
theme.category,
theme.like_number,
theme.download_number,
theme.date_uploaded,
themeg.id as id_category,
themeg.name_category,
themeg.icon_category,
themea.id_user,
themea.name_author,
themea.followers,
themea.date_join
FROM themes theme
LEFT JOIN themes_category themeg ON theme.category = themeg.id
LEFT JOIN themes_author themea ON theme.author_id = themea.id_user
WHERE theme.author_id = :user_id");
$sql->bindParam(":user_id", $themes_author_check[0]['id_user']);
$sql->execute();
$themes_by_author = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

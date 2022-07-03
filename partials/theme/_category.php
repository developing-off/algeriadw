<?php
#get if user is registed in databse table themes_author
require('func/themes/user_themes_check.php');
#get all the categories from the database and display them in a list 
$sql = $pdo->prepare("SELECT * FROM `themes_category`");
$sql->execute();
$category = $sql->fetchAll(PDO::FETCH_ASSOC);

#get number of themes in all categories 
$sql = $pdo->prepare("SELECT COUNT(*) FROM themes");
$sql->execute();
$total_themes = $sql->fetchColumn();

#show themes in all categories and authors 
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
LEFT JOIN themes_author themea ON theme.author_id = themea.id_user");
$sql->execute();
$themes = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
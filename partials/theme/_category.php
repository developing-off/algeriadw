<?php
$sql = $pdo->prepare("SELECT * FROM `themes_category`");
$sql->execute();
$category = $sql->fetchAll(PDO::FETCH_ASSOC);
var_dump($category);

?>
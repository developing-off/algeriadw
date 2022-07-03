<?php 
$sql = $pdo->prepare("SELECT * FROM themes_category");
$sql->execute();
$top_category = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach($top_category as $t_category){
$sql = $pdo->prepare("SELECT (SELECT COUNT(*) FROM themes WHERE category = :id_tag) as count1");
$sql->bindParam(':id_tag', $t_category['id']);
$sql->execute();
$count_theme = $sql->fetch(PDO::FETCH_ASSOC);
?>
<div class="col-md-3 col-sm-6 equal-height">
    <div class="item">
        <a href="#">
            <img src="<?= $t_category['illustration'] ?>" alt="Thumb">
            <span><?= $count_theme['count1'] ?> Items</span>
        </a>
        <h4><a href="#"><?= $t_category['name_category'] ?></a></h4>
    </div>
</div>
<?php
} ?>

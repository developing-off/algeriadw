<?php foreach ($category as $catg) {
?>
<div id="tab<?= $catg['id'] ?>" class="tab-pane fade <?php if ($catg['id'] == 1) { echo 'active in'; }  ?> ">
    <div class="row">
        <?php
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
            WHERE theme.category = :category
            ORDER BY theme.date_uploaded DESC 
            LIMIT 5");
            $sql->bindParam(':category', $catg['id']);
            $sql->execute();
            $new_themes = $sql->fetchAll(PDO::FETCH_ASSOC);
             foreach ($new_themes as $ntheme) {  ?>
        <div class="item">
            <a href="#">
                <img src="<?= $ntheme['image_path'] ?>" alt="Thumb">
                <div class="overlay">
                    <h5><?= $ntheme['title'] ?></h5>
                    <span><?= $ntheme['name_category'] ?></span>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</div>
<?php
}
?>
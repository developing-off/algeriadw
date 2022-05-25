<?php
$sql=$pdo->prepare("SELECT * FROM path_logos where type='png'");
$sql->execute();
$logos=$sql->fetchAll(PDO::FETCH_ASSOC);
$logo_png_only=$logos[3]['url_path'];
$logo_png_right_black=$logos[10]['url_path'];
$logo_png_right_white=$logos[8]['url_path'];

?>
<?php
$sql=$pdo->prepare("SELECT * FROM top_clients Limit 3");
$sql->execute();
$top_clients=$sql->fetchAll(PDO::FETCH_ASSOC);
?>
<?php 

function pdo(){
    try{
        return new  PDO("mysql:host=mysql-algeriadw.alwaysdata.net;dbname=algeriadw_web","algeriadw","MOLImoli1");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
$pdo=pdo();
?>
<?php
session_start();
session_destroy();
header('location:' . $url_root);
?>
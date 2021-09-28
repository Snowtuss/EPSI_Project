<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=epsi_project;charset=utf8', 'root', '');
    $db->exec("set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}


?>
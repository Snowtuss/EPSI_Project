<?php

if (isset($_COOKIE["user"])) {
    setcookie('user', null, -1,'/'); //Si un utilisateur est connecté on le deconnect
}
if (isset($_COOKIE["email"])) {
    setcookie('email', null, -1,'/'); //On unset l'id d'uilisateur
}
if (isset($_COOKIE["role"])) {
    setcookie('role', null, -1,'/'); //Si un admin est connecté on le deconnect
}
if (isset($_COOKIE["uid"])) {
    setcookie('uid', null, -1,'/'); //Si un admin est connecté on le deconnect
}
//On le redérige vers la page index
header("Location: index.php");
?>
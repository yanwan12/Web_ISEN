<?php

 require_once 'classes/Utilisateur.php';

 $utilisateur = Utilisateur::getUtilisateurFromLoginPwd($_GET['login'], $_GET['pwd']);
 $_SESSION['utilisateur'] = $utilisateur;

 echo 'bonjour ' . $utilisateur->nom;
?>
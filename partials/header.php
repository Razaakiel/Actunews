<?php
session_start();
# Importation des constantes
require_once 'config/config.php';

# Importation de la connexion à la BDD
require_once 'config/database.php';

# Importation des fonctions de notre site
require_once 'functions/global.function.php';
require_once 'functions/categorie.function.php';
require_once 'functions/post.function.php';
require_once 'functions/user.function.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!--Bootswatch CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css">
    <!--Bootstrap JS-->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <!--CK EDITOR-->
    <script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
    <title>Actunews - votre site web d'actualité !</title>
</head>

<!-- NAVIGATION -->
<?php require_once 'nav.php' ?>
<body>

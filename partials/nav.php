<?php
    # -- Récupération des catégories
    $categories = getCategories();
//    var_dump($_SESSION['user']);
//    print_r($categories)
?>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Actunews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <?php foreach ($categories as $category) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="categorie.php?name=<?= $category['slug'] ?>">
                            <?= $category['name'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <!--Btn Connexion / Inscription-->
            <?php if(!isset($_SESSION['user'])) : ?>
                <div class="text-right">
                    <a href="connexion.php" class="nav-item btn btn-outline-info">Connexion</a>
                    <a href="inscription.php" class="nav-item btn btn-outline-warning mx-2">Inscription</a>
                </div>'
            <?php else : ?>
                <div class="text-right">
                    <a href="profil.php" class="nav-item btn btn-outline-info">Profil</a>
                    <a href="deconnect.php" class="nav-item btn btn-outline-warning">Déconnecter</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>

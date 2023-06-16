<?php
require_once './partials/header.php';
?>
    <!--Barre de navigation-->
<?php
require_once './partials/nav.php'
?>
    <!--Titre de la page -->
    <div class="p-3 mx-auto text-center">
        <h1 class="display-4">Profil</h1>
    </div>
    <!--Contenu de la page-->
<?php
    $userInfo = getInfoUser($_SESSION['user']);
?>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="fisrtname">
                    <p>Prénom: <?= $userInfo['firstname'] ?></p>
                </div>

                <div class="lastname">
                    <p>nom: <?= $userInfo['lastname'] ?></p>
                </div>

                <div class="email">
                    <p>email: <?= $userInfo['email'] ?></p>
                </div>

                <div class="password">
                    <p>password: <?= $userInfo['password'] ?></p>
                </div>
            </div>
        </div>
    </div>

    <!--Pied de page-->
<?php
require_once './partials/footer.php'
?>
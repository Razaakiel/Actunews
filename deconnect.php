<?php

require_once './partials/header.php';
session_destroy();
?>
<!--Barre de navigation-->
<?php
require_once './partials/nav.php'
?>
<!--Titre de la page -->
<div class="p-3 mx-auto text-center">
    <h1 class="display-4">Déconnexion</h1>
</div>
<!--Contenu de la page-->
<div class="container">
    <div class="row">
        <div class="alert alert-success">
            <p class="text-center">Vous êtes déconnecté !</p>
        </div>
    </div>
</div>

<!--Pied de page-->
<?php
require_once './partials/footer.php';

?>

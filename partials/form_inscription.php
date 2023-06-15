<div class="container">
    <div class="row">
        <form class="d-flex flex-column" method="post">
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" id="firstname" required>

            <label for="lastname" class="mt-4">lastname</label>
            <input type="text" name="lastname" id="lastname" required>

            <label for="email" class="mt-4">email</label>
            <input type="email" name="email" id="email" required>

            <label for="password" class="mt-4">password</label>
            <input type="password" name="password" id="password" required>

            <div class="mt-3">
                <button  class="btn btn-success" type="submit">S'inscrire</button>
            </div>
        </form>
        <?php
            if (!empty($result)){
                echo '<div class="alert alert-warning">Un utilisateur avec ce mail existe déjà</div>';
            };
            if (!empty($register)){
                echo '<div class="alert alert-success">L\'utilisateur à bien été enregistré</div>';
            }
        ?>
    </div>
</div>


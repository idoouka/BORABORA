<?php
use Controller\UserController;
include_once path_php.'/Controller/UserController.php';

$userController = new UserController();

$userController->register();

?>

<form action="" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Adresse email">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
    </div>
    <div class="form-group">
        <label for="password_confirm">Confirmez votre mot de passe</label>
        <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirmez votre mot de passe">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
    <p class="box-register">Vous n'avez pas de compte ?<a href="/register"> Inscrivez-vous ici</a></p>
</form>

<?php if(isset($error)): ?>
    <div><?php echo $error; ?></div>
<?php endif; ?>

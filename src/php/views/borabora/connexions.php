<?php
use Controller\UserController;
include_once path_php . '/Controller/UserController.php';

$userController = new UserController();

$userController->login_user();

?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Inscription - Le Bora-Bora</title>
        <?php
        require_once path_php . 'include/head.php'; ?>
    </head>

<body>
<?php include_once path_php.'include/navbar.php' ?>

<h2>Connexion</h2>
<!-- Form de connexion -->
<form action="" method="post">
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur">
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
    <p class="box-register">Vous n'avez pas de compte ?<a href="/register"> Inscrivez-vous ici</a></p>
</form>

<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>

<?php include_once path_php.'include/footer.php' ?>
</body>
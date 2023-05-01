<?php

use Controller\UserController;

include_once path_php . '/Controller/UserController.php';

$userController = new UserController();

$userController->register();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Login - Le Bora-Bora</title>
    <?php
    require_once path_php . 'include/head.php'; ?>
</head>
<body>

<?php include_once path_php.'include/navbar.php' ?>

<h2>Inscriptions</h2>
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
        <input type="password" name="password_confirm" id="password_confirm" class="form-control"
               placeholder="Confirmez votre mot de passe">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php if (isset($error)): ?>
    <div><?php echo $error; ?></div>
<?php endif; ?>

<?php include_once path_php.'include/footer.php' ?>
</body>
</html>
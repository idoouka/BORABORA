
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>A propos - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php';
    ?>
</head>

<body>
<?php include_once path_php.'include/navbar.php' ?>


<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form class="login-container" action="" method="POST">
        <p><input type="text"  placeholder="Nom d'utilisateur" name="username" required ></p>
        <p><input type="password" placeholder="Password" name="password" required></p>
        <p><input type="submit" value="Log in"></p>
        <p class="box-register">Vous n'avez pas de compte ?<a href="/register"> Inscrivez-vous ici</a></p>

    </form>
</div>
<?php
include_once path_php.'user.php';
//on importe le composant d'inscriptions
login();
?>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>

</body>
</html>

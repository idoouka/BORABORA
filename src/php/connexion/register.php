<?php
include_once path_php.'user.php';
//on importe le composant d'inscriptions
register_user();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php';
    ?>
</head>

<body>
<?php include_once path_php.'include/navbar.php' ?>


<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Inscription</h2>

    <form class="login-container" method="post">
        <p><input type="text" placeholder="Nom d'utilisateur" name="username" required></p>
        <p><input type="email" placeholder="Email" name="email" required></p>
        <p><input type="password" placeholder="Mot de passe" name="password" required></p>
        <p><input type="password" placeholder="Confirmer le mot de passe" name="password2" required></p>
        <p><input type="submit" value="S'inscrire"></p>
    </form>
</div>

<?php
if (isset($message)) {
    echo '<p class="message">'.$message.'</p>';
}
?>

</body>
</html>


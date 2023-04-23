<?php
//On verifie que le user est admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
    require_once 'user.php';
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Dashboard</title>
        <?php
        include_once path_php . 'include/head.php';
        ?>
    </head>
    <body>
    <?php include_once path_php . 'include/navbar.php' ?>
    <div>
        <?php showALL() ?>
    </div>
    <?php add() ?>



    </body>
    </html>
    <?php
} else {
    header('Location: /');
    exit();
}
?>



<?php
//On verifie que le user est admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
//    On importe le fichier user.php qui comporte mais composants
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
        <!--        on appelle mon composants ShowALL-->
        <?php showALL() ?>
    </div>
    <div>
        <!--        on appelle mon composants add-->
        <?php add() ?>
    </div>


    </body>
    </html>
    <?php
} else {
    header('Location: /');
    exit();
}
?>



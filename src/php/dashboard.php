<?php
require_once 'connexion/config.php';
//On vérifie que l'utilisateur est admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
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



</body>
</html>
<?php
}
?>
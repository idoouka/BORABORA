<?php
use Controller\SpaController;
include path_php . '/Controller/SpaController.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nos spa - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php'; ?>
</head>
<body>
<?php include_once path_php.'include/navbar.php' ?>

<?php
$spaController = new SpaController();
$spas = $spaController->showAll();
?>


<?php include_once path_php.'include/footer.php' ?>
</body>
</html>

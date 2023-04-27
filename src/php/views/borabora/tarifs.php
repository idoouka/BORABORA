<?php
use Controller\ConsommationController;
include path_php . '/Controller/ConsommationController.php';

use Controller\SpaController;
include path_php . '/Controller/SpaController.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Nos prestations - Le Bora-Bora</title>
    <?php include_once path_php . 'include/head.php' ?>
</head>
<body>
<?php include_once path_php . 'include/navbar.php'?>

<section>
    <div>
        <h2>Nos services</h2>
        <?php
        $spaController = new SpaController();
        $spas = $spaController->showAll();
        ?>
    </div>

    <div>
        <h2>Nos consommaitons</h2>
        <?php
        $consommationController = new ConsommationController();
        $consommations = $consommationController->showAll();
        ?>
    </div>
</section>



</body>
<?php include_once path_php . 'include/footer.php' ?>
</html>

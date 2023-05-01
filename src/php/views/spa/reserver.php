<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réservation - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php'; ?>
</head>
<body>
<?php include_once path_php.'include/navbar.php' ?>

<?php
use Controller\SpaController;
include_once path_php.'Controller/SpaController.php';

// On récupère l'id du spa à réserver
$id = $_GET['id'];

// On récupère le spa
$spaController = new SpaController();
$spas = $spaController->reserver($id);

?>
<!--//Formulaire de réservation choice datetime start and end-->
<form action="/reservation" method="post">
    <div class="form-group">
        <label for="start">Début de la réservation : </label>
        <input type="datetime-local" id="start" name="start"
               value="<?= date('Y-m-d\TH:i', strtotime('now')) ?>"
    </div>
    <div class="form-group">
        <label for="end">Fin de la réservation : </label>
        <input type="datetime-local" id="end" name="end"
               value="<?= date('Y-m-d\TH:i', strtotime('now')) ?>"
    </div>
    <input type="submit" value="Réserver">


<?php include_once path_php.'include/footer.php' ?>
</body>
</html>
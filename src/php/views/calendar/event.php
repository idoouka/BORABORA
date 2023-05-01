<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include_once path_php . 'include/head.php';
    use Controller\Events;
    require_once path_php . 'Controller/Events.php';
    use Entity\Event;
    require_once path_php . 'Entity/Event.php';
    ?>
</head>

<body>
<?php include_once path_php . 'include/navbar.php' ?>

<?php
$events = new Events();
if (!isset($_GET['id'])) {
    header('Location: /404');
}

try{
    $event = $events->getEvent($_GET['id']);
} catch (Exception $e) {
    header('Location: /404');
}

?>
<title>Evénement : <?= h($event->getName()) ?></title>

<h2><?= h($event->getName()); ?></h2>

<ul>
    <li>Date: <?= h($event->getStart()->format('d/m/y'));?></li>
    <li>Heure: <?= h($event->getEnd()->format('H:i'));?></li>
    <li>Description: <?= h($event->getDescription()); ?></li>
</ul>


<?php include_once path_php . 'include/footer.php' ?>
</body>
</html>
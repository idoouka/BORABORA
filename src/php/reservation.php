<?php
//require_once 'connexion/config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <title>Réservation - Le Bora-Bora</title>
    <?php include_once 'include/head.php'; ?>
</head>
<body>
<?php include_once 'include/navbar.php' ?>
<!--==============================content================================-->
<!--formulaire de reservation get start_date & end_date -->
<section>
    <form method="post" action="/reservations">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <label for="start_date">Date de début:</label>
        <input type="date" name="start_date" id="start_date" required>
        <label for="end_date">Date de fin:</label>
        <input type="date" name="end_date" id="end_date" required>
        <button type="submit">Réserver</button>
    </form>
</section>
<!--==============================footer=================================-->
<?php include_once 'include/footer.php' ?>
</body>
</html>

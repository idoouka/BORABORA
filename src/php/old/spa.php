<?php
use Entity\dbconnect;
use Entity\spa;

require_once 'Entity/dbconnect.php';
require_once 'Entity/spa.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css">
    <title>Réservation - Le Bora-Bora</title>
    <?php include_once 'include/head.php'; ?>
</head>
<body>
<?php include_once 'include/navbar.php';
$db = new dbconnect();
$conn = $db->getConnection();

$spa = new spa($conn);
$spa = $spa->getAll();

//On affiche les données dans un tableau
//div centrer
echo '<table id="result">';
echo '<tr>';
echo '<th>Id</th>';
echo '<th>Soin</th>';
echo '<th>Descriptifs</th>';
echo '<th>Durée</th>';
echo '<th>Prix</th>';
echo '</tr>';
foreach ($spa as $spa) {
    echo '<tr>';
    echo '<td>' . $spa['id'] . '</td>';
    echo '<td>' . $spa['soin'] . '</td>';
    echo '<td>' . $spa['descriptifs'] . '</td>';
    echo '<td>' . $spa['durée'] . '</td>';
    echo '<td>' . $spa['prix'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>

<?php include_once 'include/footer.php'; ?>

</body>
</html>






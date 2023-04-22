<?php

use Entity\dbconnect;

require_once 'Entity/dbconnect.php';

// Initialisation de la variable $type
$type = '';

// Crée une instance de la classe dbconnect
$db = new dbconnect();

//On utilise la methode getConnection() pour se connecter à la base de données
$conn = $db->getConnection();

// Vérifie si le formulaire a été soumis
if (isset($_POST['type'])) {
    $type = $_POST['type'];

    // Ajout d'un paramètre search à l'URL
    header('Location: ?search=' . urlencode($type));
    exit;
}

// Vérifie si un paramètre search est présent dans l'URL
if (isset($_GET['search'])) {
    $type = urldecode($_GET['search']);
}

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

<section id="content">
    <div id="page-content">
        <form method="post" action="">
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="">-----</option>
                <option value="soins"<?php if ($type == 'soins') echo 'selected="selected"'; ?>>Soins</option>
                <option value="sauna"<?php if ($type == 'sauna') echo 'selected="selected"'; ?>>Sauna</option>
                <option value="hammam"<?php if ($type == 'hammam') echo 'selected="selected"'; ?>>Hammam</option>
            </select>
            <button type="submit">Rechercher</button>
        </form>

        <?php
        // Affiche les résultats uniquement si la variable $type contient une valeur
        if (!empty($type)) {
            $sql = "SELECT * FROM spa WHERE type = '$type'";

            echo '<table id="result">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nom</th>';
            echo '<th>Descriptif</th>';
            echo '<th>Durée</th>';
            echo '<th>Prix</th>';
            echo '<th>Réservation</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($conn->query($sql) as $row) {
                echo '<tr>';
                echo '<td>';
                echo $row['soin'];
                echo '</td>';
                echo '<td>';
                echo $row['descriptifs'];
                echo '</td>';
                echo '<td>';
                echo $row['durée'] . ' minutes';
                echo '</td>';
                echo '<td>';
                echo $row['prix'] . ' CFP';
                echo '</td>';
                echo '<td>';
                echo 'Voir le calendrier';
                echo '<form method="post" action="/reservation">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<input type="submit" name="submit" value="Réserver">';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        }
        ?>

    </div>
</section>
<!--==============================footer=================================-->
<?php include_once 'include/footer.php' ?>
</body>
</html>






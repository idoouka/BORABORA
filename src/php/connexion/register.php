<?php
use Entity\dbconnect;

require_once path_php.'Entity/dbconnect.php';

// Crée une instance de la classe dbconnect
$db = new dbconnect();

//On utilise la methode getConnection() pour se connecter à la base de données
$conn = $db->getConnection();

if (isset($_REQUEST['username'],$_REQUEST['email'],$_REQUEST['password'],$_REQUEST['password2'])) {
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $password2 = $_REQUEST['password2'];

    if ($password == $password2) {
        // Prépare la requête SQL
        $stmt = $conn->prepare("SELECT username FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        // Vérifie si la re!quête a renvoyé un résultat
        if ($stmt->rowCount() == 0) {
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $hash = hash('sha256', $password);
            $stmt->bindParam(':password', $hash);
            $stmt->execute();

            // Redirige l'utilisateur vers la page de connexion
            header("Location: /login");
            exit;
        } else {
            $message = "Ce nom d'utilisateur est déjà utilisé.";
        }
    } else {
        $message = "Les mots de passe ne correspondent pas.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php';
    ?>
</head>

<body>
<?php include_once path_php.'include/navbar.php' ?>


<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Inscription</h2>

    <form class="login-container" method="post">
        <p><input type="text" placeholder="Nom d'utilisateur" name="username" required></p>
        <p><input type="email" placeholder="Email" name="email" required></p>
        <p><input type="password" placeholder="Mot de passe" name="password" required></p>
        <p><input type="password" placeholder="Confirmer le mot de passe" name="password2" required></p>
        <p><input type="submit" value="S'inscrire"></p>
    </form>
</div>

<?php
if (isset($message)) {
    echo '<p class="message">'.$message.'</p>';
}
?>

</body>
</html>


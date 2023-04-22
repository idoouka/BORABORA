<?php
use Entity\dbconnect;

require_once path_php.'Entity/dbconnect.php';

// Crée une instance de la classe dbconnect
$db = new dbconnect();

//On utilise la methode getConnection() pour se connecter à la base de données
$conn = $db->getConnection();

if (isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prépare la requête SQL
    $stmt = $conn->prepare("SELECT username,admin,id FROM users WHERE username = :username AND password = :password");

    // Lie les paramètres à la requête préparée
    $stmt->bindParam(':username', $username);
    $hash = hash('sha256', $password);
    $stmt->bindParam(':password', $hash);

    // Exécute la requête préparée
    $stmt->execute();

    // Vérifie si la requête a renvoyé un résultat
    if ($stmt->rowCount() == 1) {
        $row = $stmt->fetch();

        // Stocke les informations de l'utilisateur dans une session
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin'] = $row['admin'];
        $_SESSION['id'] = $row['id'];

        // Redirige l'utilisateur vers la page d'accueil
        header("Location: /");
        exit;
    } else {
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>A propos - Le Bora-Bora</title>
    <?php
    include_once path_php.'include/head.php';
    ?>
</head>

<body>
<?php include_once path_php.'include/navbar.php' ?>


<div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Log in</h2>

    <form class="login-container" action="" method="POST">
        <p><input type="text"  placeholder="Nom d'utilisateur" name="username" required ></p>
        <p><input type="password" placeholder="Password" name="password" required></p>
        <p><input type="submit" value="Log in"></p>
        <p class="box-register">Vous n'avez pas de compte ?<a href="/register"> Inscrivez-vous ici</a></p>

    </form>
</div>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>

</body>
</html>

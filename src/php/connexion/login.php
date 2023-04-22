<?php
require('config.php');
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


<?php
if (isset($_POST['username'])){
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $password = hash('sha256', $password);

    $stmt = $conn->prepare("SELECT username,admin,id FROM users WHERE username = ? AND password = ?");
    $stmt->bind_param('ss', $username, $password);
    $result = $stmt->execute();
    $stmt->bind_result($resUsername,$resAdmin, $resId);
    $stmt->store_result();
    $stmt->fetch();
    $nbRows = $stmt->num_rows;
    $stmt->close();
    if($nbRows == 1){
        $_SESSION['username'] = $username;
        $_SESSION['admin'] = $resAdmin;
        $_SESSION['id'] = $resId;
        if ($resAdmin == 1) {
            header("Location: /");
        }
        else{
            header("Location: /");
        }
    }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
}
?>



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
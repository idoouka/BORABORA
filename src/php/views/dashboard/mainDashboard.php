<?php
//On verifie que le user est admin
if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Dashboard</title>
    <?php
    require_once path_php . 'include/head.php'; ?>
</head>

<body>
<?php include_once path_php.'include/navbar.php' ?>
<h2>Dashboard</h2>

<?php
include_once path_php . 'views/users/users-list.php';
?>






<?php if (isset($error)): ?>
    <div><?php echo $error; ?></div>
<?php endif; ?>

<?php include_once path_php.'include/footer.php' ?>
</body>

<?php
} else {
    header('Location: /');
}
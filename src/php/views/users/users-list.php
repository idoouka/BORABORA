<!--On importe le controller-->
<?php
use Controller\UserController;
include path_php.'/Controller/UserController.php';
?>
<h1>Page de test</h1>
<?php
$userController = new UserController();
$users = $userController->showAll();

$users = $userController->showById(7);
?>


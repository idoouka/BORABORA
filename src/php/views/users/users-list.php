<h1>Page de test</h1>
<?php
use Controller\UserController;
include_once path_php . 'Controller/UserController.php';

$userController = new UserController();
$userController->showAll();

?>


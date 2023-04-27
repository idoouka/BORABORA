<h1>Page de test</h1>
<?php
use Controller\ConsommationController;
include path_php.'/Controller/ConsommationController.php';

$consController = new ConsommationController();

$consController->getCategorie('Alcool');

?>


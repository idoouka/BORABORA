<h2>Liste user </h2>
<?php
use Controller\UserController;
include_once path_php . 'Controller/UserController.php';
// On affiche la liste des utilisateurs dans un tableau avec un foreach
foreach ($users as $user) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Username</th>";
    echo "<th>Email</th>";
    echo "<th>Password</th>";
    echo "<th>Admin</th>";
    echo "<th>Actions</th>";
    echo "</tr>";
    echo "<td>" . $user->getId() . "</td>";
    echo "<td>" . $user->getUsername() . "</td>";
    echo "<td>" . $user->getEmail() . "</td>";
    echo "<td>" . $user->getPassword() . "</td>";
    if ($user->isAdmin() == 1) {
        echo "<td>admin</td>";
    } else {
        echo "<td>user</td>";
    }
    echo "<td>";
    echo "<form method='post' action=''>";
    echo "<input type='hidden' name='id' value='" . $user->getId() . "'>";
    echo "<input type='submit' name='delete' value='Supprimer'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $userController = new UserController();
        $userController->delete($id);
        // Actualiser la page après la suppression de l'utilisateur
        header('Location: /dashboard');
    }
}
?>

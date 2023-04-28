<?php
// On affiche la liste des utilisateurs dans un tableau avec un foreach
foreach ($users as $user) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>" . $user->getId() . "</td>";
    echo "<td>" . $user->getUsername() . "</td>";
    echo "<td>" . $user->getEmail() . "</td>";
    echo "<td>" . $user->getPassword() . "</td>";
    if ($user->isAdmin() == 1) {
        echo "<td>admin</td>";
    } else {
        echo "<td>user</td>";
    }
    echo "</tr>";
    echo "</table>";
}

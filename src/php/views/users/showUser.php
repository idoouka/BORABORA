<?php
//On affiche l'utilisateur recupere par l'ID
echo "<table border='1'>";
echo "<tr>";
echo "<td>" . $user->getId() . "</td>";
echo "<td>" . $user->getUsername() . "</td>";
echo "<td>" . $user->getEmail() . "</td>";
echo "<td>" . $user->getPassword() . "</td>";
echo "<td>" . $user->isAdmin() . "</td>";
echo "</tr>";
echo "</table>";

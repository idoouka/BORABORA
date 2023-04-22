<?php

// Détruire la session.
if (session_destroy()) {
    // Redirection vers la page de connexion
    header("Location: /login");
}
?>
<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Extrait le chemin de l'URL demandée
$path = parse_url($requestUri, PHP_URL_PATH);

// Extrait les paramètres de la requête
$query = parse_url($requestUri, PHP_URL_QUERY);
parse_str($query, $params);

// Définit les routes de l'application
$routes = array(
    '/' => 'src/php/home.php',
    '/about' => 'src/php/a-propos.php',
    '/prestations' => 'src/php/nos-prestations.php',
    '/tarifs' => 'src/php/nos-tarifs.php',
    '/spa' => 'src/php/spa.php',
    '/reservation' => 'src/php/reservation.php',
    '/login' => 'src/php/connexion/login.php',
    '/logout' => 'src/php/connexion/logout.php',
    '/register' => 'src/php/connexion/register.php',
    '/dashboard' => 'src/php/dashboard.php',

    '/404' => 'src/php/404.php'
);

// Vérifie si l'URL demandée correspond à une route définie
if (array_key_exists($path, $routes)) {
    // Stocke la valeur de $path dans une variable de session
    session_start();
    // On importe le fichier utils.php
    include 'src/php/utils.php';
    $_SESSION['path'] = $path;

    // Inclut le fichier correspondant à la route
    include $routes[$path];
} else {
    // Affiche une page d'erreur 404
    include 'src/php/404.php';
}
?>

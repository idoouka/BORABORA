<?php
$requestUri = $_SERVER['REQUEST_URI'];

// Extrait le chemin de l'URL demandée
$path = parse_url($requestUri, PHP_URL_PATH);

// Extrait les paramètres de la requête
$query = parse_url($requestUri, PHP_URL_QUERY);
parse_str($query, $params);

// Définit les routes de l'application
$routes = array(
    '/' => array(
        'file' => 'src/php/views/borabora/home.php'
    ),
    '/about' => array(
        'file' => 'src/php/views/borabora/a-propos.php'
    ),
    '/prestations' => array(
        'file' => 'src/php/views/borabora/nos-prestations.php'
    ),
    '/spa' => array(
        'file' => 'src/php/views/borabora/spa.php'
    ),
    '/tarifs' =>array(
        'file' => 'src/php/views/borabora/tarifs.php'
    ),
    '/login' => array(
        'file' => 'src/php/views/users/connexions.php'
    ),
    '/register' => array(
        'file' => 'src/php/views/users/register.php'
    ),
    '/logout' => array(
        'file' => 'src/php/views/users/logout.php'
    ),
    '/404' => array(
        'file' => 'src/php/views/utils/404.php'
    )
);

// Vérifie si l'URL demandée correspond à une route définie
if (array_key_exists($path, $routes)) {
    // Stocke la valeur de $path dans une variable de session
    session_start();
    // On importe le fichier utils.php
    include 'src/php/utils.php';
    $_SESSION['path'] = $path;

//     Récupère le fichier correspondant à la route
//     $route permet de récupérer le tableau associatif de la route
//     $file permet de récupérer la valeur de la clé 'file' du tableau associatif
//     $function permet de récupérer la valeur de la clé 'function' du tableau associatif

    $route = $routes[$path];
    $file = $route['file'];

    // Vérifie si une fonction est spécifiée pour la route
    // Si il y a une fonction, on l'appelle
    if (isset($route['function'])) {
        // Inclut le fichier correspondant à la route
        include $file;

        // Appelle la fonction spécifiée pour la route
        $function = $route['function'];
        // Appelle la fonction
        $function();
    } else {
        // Inclut le fichier correspondant à la route
        // Si il n'y a pas de fonction, on inclut simplement le fichier
        include $file;
    }
} else {
    // Affiche une page d'erreur 404
    include 'src/php/views/utils/404.php';
}
?>

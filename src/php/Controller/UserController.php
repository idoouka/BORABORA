<?php

namespace Controller;

use Entity\dbconnect;
use Entity\user;
use PDO;

include path_php . '/Entity/dbconnect.php';
include path_php . '/Entity/user.php';

class UserController
{
    public function __construct()
    {
        $db = new dbconnect();
        $this->db = $db->getConnection();
    }

    // Affiche tous les utilisateurs
    public function showAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = array();

        while ($row = $stmt->fetch()) {
            $user = new user($row['id'], $row['username'], $row['email'], $row['password'], $row['admin']);
            $users[] = $user;
        }

        include path_php . 'views/users/showAllUsers.php';
    }

    // Affiche un utilisateur en fonction de son ID
    public function showById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $row = $stmt->fetch();

        if ($row) {
            $user = new user($row['id'], $row['username'], $row['email'], $row['password'], $row['admin']);
            include path_php . 'views/users/showUser.php';
        } else {
            echo "L'utilisateur avec l'ID $id n'existe pas.";
        }
    }

    public function register()
    {
        // Vérifier si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Récupérer les données du formulaire
            $username = trim($_POST["username"]);
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
            $password_confirm = trim($_POST["password_confirm"]);

            // Vérifier si les champs ont été remplis
            if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
                $error = "Tous les champs sont requis.";
                include path_php . 'views/users/register.php';
                return;
            }

            // Vérifier si l'email est valide
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = "L'adresse email n'est pas valide.";
                include path_php . 'views/users/register.php';
                return;
            }

            // Vérifier si le mot de passe et sa confirmation sont identiques
            if ($password !== $password_confirm) {
                $error = "Les mots de passe ne correspondent pas.";
                include path_php . 'views/users/register.php';
                return;
            }

            // Hasher le mot de passe pour stockage sécurisé dans la base de données
            $hashed_password = hash('sha256',$password);

            // Ajouter l'utilisateur dans la base de données
            $stmt = $this->db->prepare("INSERT INTO users (username, email, password ,admin) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->execute();

            // Rediriger l'utilisateur vers la page de connexion
            header("Location: /login");
            exit();
        }

        // Afficher le formulaire d'inscription
        include path_php . 'views/users/register.php';
    }


}

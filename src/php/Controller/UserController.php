<?php

namespace Controller;

use Entity\dbconnect;
use Entity\user;


include_once path_php . '/Entity/dbconnect.php';
include_once path_php . '/Entity/user.php';

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
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
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
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $row = $stmt->fetch();

        if ($row) {
            $user = new user($row['id'], $row['username'], $row['email'], $row['password'], $row['admin']);
            include path_php . 'views/users/showUser.php';
        } else {
            echo "L'utilisateur avec l'ID $id n'existe pas.";
        }
    }

    // Ajout d'un utilisateur
    public function login_user()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password = hash('sha256', $password);

            $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute() or die(print_r($stmt->errorInfo(), true));
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['admin'] = $row['admin'];
                $_SESSION['id'] = $row['id'];
                header('Location: /');
            } else {
                echo "L'utilisateur n'existe pas.";
            }
        }
    }


    public function register()
    {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $password = hash('sha256', $password);
            $password_confirm = hash('sha256', $password_confirm);

            if (!empty($username) && !empty($email) && !empty($password) && !empty($password_confirm)) {
                if ($password == $password_confirm) {
                    $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
                    $stmt->bindParam(':username', $username);
                    $stmt->execute() or die(print_r($stmt->errorInfo(), true));
                    $row = $stmt->fetch();
                    if (!$row) {
                        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
                        $stmt->bindParam(':username', $username);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':password', $password);
                        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
                        header('Location: /');
                    } else {
                        return "L'utilisateur existe déjà.";
                    }
                } else {
                    return "Les mots de passe ne correspondent pas.";
                }
            } else {
                return "Veuillez remplir tous les champs.";
            }
        }
        return "";
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        header('Location: /');
    }

    public function edit()
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $password = hash('sha256', $password);
            $password_confirm = hash('sha256', $password_confirm);

            if (!empty($username) && !empty($email) && !empty($password) && !empty($password_confirm)) {
                if ($password == $password_confirm) {
                    $stmt = $this->db->prepare("SELECT * FROM users WHERE username = :username");
                    $stmt->bindParam(':username', $username);
                    $stmt->execute() or die(print_r($stmt->errorInfo(), true));
                    $row = $stmt->fetch();
                    if (!$row) {
                        $stmt = $this->db->prepare("UPDATE users SET username = :username, email = :email, password = :password WHERE id = :id");
                        $stmt->bindParam(':username', $username);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':password', $password);
                        $stmt->bindParam(':id', $id);
                        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
                        header('Location: /');
                    } else {
                        return "L'utilisateur existe déjà.";
                    }
                } else {
                    return "Les mots de passe ne correspondent pas.";
                }
            } else {
                return "Veuillez remplir tous les champs.";
            }
        }
        return "";
    }
}


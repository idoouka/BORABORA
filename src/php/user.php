<?php

use Entity\dbconnect;
use Entity\User;

require_once 'Entity/dbconnect.php';
require_once 'Entity/User.php';


function showALL()
{
    $db = new dbconnect();
    $conn = $db->getConnection();

    $user = new user($conn);
    $users = $user->getUsers();

//On affiche les données dans un tableau
    echo '<table id="result">';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>User</th>';
    echo '<th>Mail</th>';
    echo '<th>Password</th>';
    echo '<th>Role</th>';
    echo '<th>Actions</th>';
    echo '</tr>';
    foreach ($users as $user) {
        echo '<tr>';
        echo '<td>' . $user['id'] . '</td>';
        echo '<td>' . $user['username'] . '</td>';
        echo '<td>' . $user['email'] . '</td>';
        echo '<td>' . $user['password'] . '</td>';
        echo '<td>' . $user['admin'] . '</td>';
        echo '<td><a href="/dashboard/user-edit?id=' . $user['id'] . '">Modifier</a> | <a href="/dashboard/user-delete?id=' . $user['id'] . '">Supprimer</a></td>';
        echo '</tr>';
    }
}

function edit()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $db = new dbconnect();
        $conn = $db->getConnection();

        $user = new user($conn);
        $userData = $user->getUserById($id);

        if ($userData) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $username = $_POST['username'];
                $email = $_POST['email'];
                if (empty($_POST['password'])) {
                    $password = $userData['password'];
                    $updatePassword = false;
                } else {
                    $password = $_POST['password'];
                    $updatePassword = true;

                }
                $admin = $_POST['admin'];
                $user->updateUser($id, $username, $password, $email, $admin, $updatePassword);

                header('Location: /dashboard');
                exit();
            }

//On affiche le formulaire de modification
            echo '<form method="POST">';
            echo '<input type="hidden" name="id" value="' . $userData['id'] . '">';
            echo '<div>';
            echo '<label for="username">Username :</label>';
            echo '<input type="text" name="username" value="' . $userData['username'] . '">';
            echo '</div>';
            echo '<div>';
            echo '<label for="email">Email :</label>';
            echo '<input type="email" name="email" value="' . $userData['email'] . '">';
            echo '</div>';
            echo '<div>';
            echo '<label for="password">Password :</label>';
            echo '<input type="password" name="password" >';
            echo '</div>';
            echo '<div>';
            echo '<label for="admin">Role :</label>';
            echo '<select name="admin">';
            echo '<option value="0" ' . ($userData['admin'] == 0 ? 'selected' : '') . '>User</option>';
            echo '<option value="1" ' . ($userData['admin'] == 1 ? 'selected' : '') . '>Admin</option>';
            echo '</select>';
            echo '</div>';
            echo '<button type="submit">Modifier</button>';
            echo '</form>';
        } else {
            //Si l'utilisateur n'existe pas, on redirige vers la page principale
            header('Location: /dashboard');
            exit();
        }
    } else {
        //Si l'id n'est pas présent dans l'URL, on redirige vers la page principale
        header('Location: /dashboard');
        exit();
    }

}

function delete()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $db = new dbconnect();
        $conn = $db->getConnection();

        $user = new user($conn);
        $userData = $user->getUserById($id);

        if ($userData) {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $user->deleteUser($id);

                header('Location: /dashboard');
                exit();
            }

            //On affiche le message de confirmation de suppression
            echo '<p>Voulez-vous vraiment supprimer l\'utilisateur ' . $userData['username'] . ' ?</p>';
            echo '<form method="POST">';
            echo '<button type="submit">Supprimer</button>';
            echo '</form>';
        } else {
            //Si l'utilisateur n'existe pas, on redirige vers la page principale
            header('Location: /dashboard');
            exit();
        }
    } else {
        //Si l'id n'est pas présent dans l'URL, on redirige vers la page

    }
}

function add()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $isAdmin = isset($_POST['admin']) ? true : false;

        $db = new dbconnect();
        $conn = $db->getConnection();

        $user = new user($conn);
        $result = $user->createUser($username, $password, $email, $isAdmin);

        if ($result) {
            // Rediriger l'utilisateur vers la page de la liste des utilisateurs après la création
            header('Location: /dashboard');
            exit;
        } else {
            echo "Erreur lors de la création de l'utilisateur.";
        }
    }
    //Afficher le formulaire pour ajouter un utilisateur
    echo '<h2>Ajouter un utilisateur</h2>';
    echo '<form method="POST">';
    echo '<div class="form-group">';
    echo '<label for="username">Nom d\'utilisateur</label>';
    echo '<input type="text" class="form-control" id="username" name="username">';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="email">Email</label>';
    echo '<input type="email" class="form-control" id="email" name="email">';
    echo '</div>';
    echo '<div class="form-group">';
    echo '<label for="password">Mot de passe</label>';
    echo '<input type="password" class="form-control" id="password" name="password">';
    echo '</div>';
    echo '<div class="form-group form-check">';
    echo '<input type="checkbox" class="form-check-input" id="admin" name="admin">';
    echo '<label class="form-check-label" for="admin">Administrateur</label>';
    echo '</div>';
    echo '<button type="submit" class="btn btn-primary">Ajouter</button>';
    echo '</form>';
    echo '<hr>';
}

?>
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
}

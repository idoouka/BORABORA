<?php

namespace Entity;

use PDO;
use PDOException;

class user
{
    // Les informations d'identification pour se connecter à la base de données
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    // Méthode pour créer un utilisateur
    public function createUser($username, $password, $email, $isAdmin = false)
    {
        try {
            $hashedPassword = hash('sha256', $password);
            $stmt = $this->db->prepare("INSERT INTO users(username, password, email, admin) VALUES(:username, :password, :email, :isAdmin)");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $hashedPassword);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":isAdmin", $isAdmin, PDO::PARAM_BOOL);
            $stmt->execute();
            return true;
        } catch (PDOException $exception) {
            echo "Erreur lors de la création de l'utilisateur : " . $exception->getMessage();
            return false;
        }
    }

    // Méthode pour récupérer tous les utilisateurs
    public function getUsers()
    {
        try {
            $stmt = $this->db->query("SELECT id, username,password, email, admin FROM users");
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $exception) {
            echo "Erreur lors de la récupération des utilisateurs : " . $exception->getMessage();
            return false;
        }
    }

    // Méthode pour mettre à jour un utilisateur
    public function updateUser($id, $username, $password, $email, $Admin = false, $updatePassword)
    {
        try {
            if ($updatePassword == true) {
                $hashedPassword = hash('sha256', $password);
            } else {
                $hashedPassword = $password;
            }
            $stmt = $this->db->prepare("UPDATE users SET username=:username, password=:password, email=:email, admin=:isAdmin WHERE id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $hashedPassword);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":isAdmin", $Admin, PDO::PARAM_BOOL);
            $stmt->execute();
            return true;
        } catch (PDOException $exception) {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $exception->getMessage();
            return false;
        }
    }

    // Méthode pour supprimer un utilisateur
    public function deleteUser($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return true;
        } catch (PDOException $exception) {
            echo "Erreur lors de la suppression de l'utilisateur : " . $exception->getMessage();
            return false;
        }
    }

    public function getUserById($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT id, username,password, email, admin FROM users WHERE id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $exception->getMessage();
            return false;
        }
    }

    public function getUserByUsername($username){
        try {
            $stmt = $this->db->prepare("SELECT id, username,password, email, admin FROM users WHERE username=:username");
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $exception) {
            echo "Erreur lors de la récupération de l'utilisateur : " . $exception->getMessage();
            return false;
        }
    }
    }
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
    public function createUser($username, $password)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO users(username, password) VALUES(:username, :password)");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Erreur lors de la création de l'utilisateur : " . $exception->getMessage();
        }
    }

    // Méthode pour récupérer tous les utilisateurs
    public function getUsers()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM users");
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $exception) {
            echo "Erreur lors de la récupération des utilisateurs : " . $exception->getMessage();
        }
    }

    // Méthode pour mettre à jour un utilisateur
    public function updateUser($id, $username, $password)
    {
        try {
            $stmt = $this->db->prepare("UPDATE users SET username=:username, password=:password WHERE id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Erreur lors de la mise à jour de l'utilisateur : " . $exception->getMessage();
        }
    }

    // Méthode pour supprimer un utilisateur
    public function deleteUser($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM users WHERE id=:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        } catch (PDOException $exception) {
            echo "Erreur lors de la suppression de l'utilisateur : " . $exception->getMessage();
        }
    }
}
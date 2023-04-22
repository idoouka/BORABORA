<?php

namespace Entity;

use PDO;
use PDOException;

class dbconnect
{
    // Les informations d'identification pour se connecter à la base de données
    private $host = "localhost";
    private $db_name = "borabora";
    private $username = "root";
    private $password = "";
    public $conn;

    // Méthode pour se connecter à la base de données MySQL
    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion : " . $exception->getMessage();
        }

        return $this->conn;
    }
}
<?php

namespace Controller;

use Entity\dbconnect;
use Entity\spa;

include_once path_php . '/Entity/dbconnect.php';
include_once path_php . '/Entity/spa.php';

class SpaController
{
    private dbconnect $db;

    public function __construct()
    {
        // On instancie un objet de la classe dbconnect pour se connecter à la base de données
        $this->db = new dbconnect();
    }

    public function showAll()
    {
        // On récupère tous les spas de la base de données
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM spa");

        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $spas = array();

        while ($row = $stmt->fetch()) {
            $spas[] = new spa($row['soin'], $row['descriptifs'], $row['durée'], $row['prix'], $row['type'], $row['id']);
        }

        // On inclut le fichier de vue qui affiche les spas
        include path_php.'views/spa/showAll.php';
    }


    public function showById($id)
    {
        // On récupère le spa correspondant à l'id passé en paramètre
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM spa WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $row = $stmt->fetch();

        return new spa($row['soin'], $row['descriptifs'], $row['duree'], $row['prix'], $row['type'], $row['id']);
    }

}
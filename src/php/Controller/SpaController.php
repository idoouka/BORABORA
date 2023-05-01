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
        include path_php . 'views/spa/showAll.php';
    }


    public function showById($id)
    {
        // On récupère le spa correspondant à l'id passé en paramètre
        $stmt = $this->db->getConnection()->prepare("SELECT * FROM spa WHERE id = :id");

        $stmt->bindParam(':id', $id);

        $stmt->execute() or die(print_r($stmt->errorInfo(), true));

        $row = $stmt->fetch();

        return new spa($row['soin'], $row['descriptifs'], $row['durée'], $row['prix'], $row['type'], $row['id']);
    }

    public function reserver($id)
    {
        if (!isset($_SESSION['username'])) {
            header('Location: /login');
        }
        $username = $_SESSION['username'];


        // On récupère le spa correspondant à l'id passé en paramètre
        $spa = $this->showById($id);


        // On récupère l'id du user
        $stmt = $this->db->getConnection()->prepare("SELECT id FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $row = $stmt->fetch();
        $id_user = $row['id'];


        // On récupère l'id du spa
        $id_spa = $spa->getId();

        //On récupère les dates de début et de fin de la réservation
        if (isset($_POST['start']) && isset($_POST['end'])) {
            $start = $_POST['start'];
            $end = $_POST['end'];
        } else {
            $start = date('Y-m-d\TH:i', strtotime('now'));
            $end = date('Y-m-d\TH:i', strtotime('now'));
        }

//        dd('start'.$start, 'end'.$end, 'user'.$id_user, 'sap'.$id_spa);
        // On insère la réservation dans la base de données

    }

}
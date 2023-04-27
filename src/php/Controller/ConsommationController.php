<?php

namespace Controller;

use Entity\dbconnect;
include_once path_php . '/Entity/dbconnect.php';
include_once path_php . '/Entity/user.php';


class ConsommationController
{
    private dbconnect $db;

    public function __construct()
    {
        // On instancie un objet de la classe dbconnect pour se connecter à la base de données
        $this->db = new dbconnect();
    }

    public function showAll()
    {
        $stmt = $this->db->getConnection()->prepare("select cc.lib_cat, c.lib_cons, c.prix_cons from consommation c inner join cat_cons cc on cc.cat = c.cat;");
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $prix_par_categorie = array();
        while ($row = $stmt->fetch()) {
            $prix_par_categorie[$row['lib_cat']][] = array('libelle' => $row['lib_cons'], 'prix' => $row['prix_cons']);
        }
        $nb_categories = count($prix_par_categorie);
        include path_php . 'views/consommation/showAllConsommation.php';
    }

    public function showCategorie()
    {
        $stmt = $this->db->getConnection()->prepare("select lib_cat from cat_cons;");
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $categories = array();
        while ($row = $stmt->fetch()) {
            $categories[] = $row['lib_cat'];
        }
        include path_php . 'views/consommation/showAllCategorie.php';
    }

    public function getCategorie($choice)
    {
        $stmt = $this->db->getConnection()->prepare("SELECT cat FROM cat_cons WHERE lib_cat = :choice");
        $stmt->bindParam(':choice', $choice);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $row = $stmt->fetch();
        $cat = $row['cat'];

        $stmt = $this->db->getConnection()->prepare("SELECT lib_cons, prix_cons FROM consommation WHERE cat = :cat");
        $stmt->bindParam(':cat', $cat);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $consommations = $stmt->fetchAll();

        include path_php . 'views/consommation/getCategorie.php';
    }

}
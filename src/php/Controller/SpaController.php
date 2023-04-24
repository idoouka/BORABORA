<?php

namespace Controller;

class SpaController
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM spa");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM spa WHERE id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($soin, $descriptifs, $duree, $prix, $type)
    {
        $stmt = $this->db->prepare("INSERT INTO spa (soin, descriptifs, durée, prix, type) VALUES (:soin, :descriptifs, :duree, :prix, :type)");
        $stmt->bindValue(":soin", $soin);
        $stmt->bindValue(":descriptifs", $descriptifs);
        $stmt->bindValue(":duree", $duree);
        $stmt->bindValue(":prix", $prix);
        $stmt->bindValue(":type", $type);
        return $stmt->execute();
    }

    public function update($id, $soin, $descriptifs, $duree, $prix, $type)
    {
        $stmt = $this->db->prepare("UPDATE spa SET soin = :soin, descriptifs = :descriptifs, durée = :duree, prix = :prix, type = :type WHERE id = :id");
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":soin", $soin);
        $stmt->bindValue(":descriptifs", $descriptifs);
        $stmt->bindValue(":duree", $duree);
        $stmt->bindValue(":prix", $prix);
        $stmt->bindValue(":type", $type);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $stmt = $this->db->prepare("DELETE FROM spa WHERE id = :id");
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }

    public function getByType($type)
    {
        $stmt = $this->db->prepare("SELECT * FROM spa WHERE type = :type");
        $stmt->bindValue(":type", $type);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
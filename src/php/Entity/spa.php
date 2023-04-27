<?php

namespace Entity;

class spa
{
    private $id;
    private $soin;
    private $descriptifs;
    private $duree;
    private $prix;

    private $type;

    public function __construct($soin, $descriptifs, $duree, $prix, $type, $id = null)
    {
        $this->id = $id;
        $this->soin = $soin;
        $this->descriptifs = $descriptifs;
        $this->duree = $duree;
        $this->prix = $prix;
        $this->type = $type;
    }

    /**
     * @return mixed|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed|null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSoin()
    {
        return $this->soin;
    }

    /**
     * @param mixed $soin
     */
    public function setSoin($soin): void
    {
        $this->soin = $soin;
    }

    /**
     * @return mixed
     */
    public function getDescriptifs()
    {
        return $this->descriptifs;
    }

    /**
     * @param mixed $descriptifs
     */
    public function setDescriptifs($descriptifs): void
    {
        $this->descriptifs = $descriptifs;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree): void
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param mixed $prix
     */
    public function setPrix($prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

}
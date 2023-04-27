<?php

namespace Entity;

class consommation
{
    private ?int $numCons;
    private ?string $libCons;
    private ?float $prixCons;
    private ?string $cat;

    public function __construct(int $numCons, ?string $libCons = null, ?float $prixCons = null, ?string $cat = null)
    {
        $this->numCons = $numCons;
        $this->libCons = $libCons;
        $this->prixCons = $prixCons;
        $this->cat = $cat;
    }

    public function getNumCons(): ?int
    {
        return $this->numCons;
    }

    public function setNumCons(?int $numCons)
    {
        $this->numCons = $numCons;
    }

    public function getLibCons(): ?string
    {
        return $this->libCons;
    }

    public function setLibCons(?string $libCons)
    {
        $this->libCons = $libCons;
    }

    public function getPrixCons(): ?float
    {
        return $this->prixCons;
    }

    public function setPrixCons(?float $prixCons)
    {
        $this->prixCons = $prixCons;
    }

    public function getCat(): ?string
    {
        return $this->cat;
    }

    public function setCat(?string $cat)
    {
        $this->cat = $cat;
    }

}
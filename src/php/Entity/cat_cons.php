<?php

namespace Entity;

class cat_cons
{
    private ?string $cat;
    private ?string $libCat;

    public function __construct(string $cat, ?string $libCat = null)
    {
        $this->cat = $cat;
        $this->libCat = $libCat;
    }

    public function getCat(): ?string
    {
        return $this->cat;
    }

    public function setCat(?string $cat)
    {
        $this->cat = $cat;
    }

    public function getLibCat(): ?string
    {
        return $this->libCat;
    }

    public function setLibCat(?string $libCat)
    {
        $this->libCat = $libCat;
    }
}
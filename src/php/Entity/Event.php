<?php

namespace Entity;

class Event
{
    private $id;

    private $name;

    private $description;

    private $start;

    private $end;

    private $id_user;

    private $id_spa;


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return h($this->name);
    }

    public function getDescription(): string
    {
        return h($this->description) ?? '';
    }

    public function getStart(): \DateTime
    {
        return new \DateTime($this->start);
    }

    public function getEnd(): \DateTime
    {
        return new \DateTime($this->end);
    }

    public function getId_user(): int
    {
        return $this->id_user;
    }

    public function getId_spa(): int
    {
        return $this->id_spa;
    }

    public function setId(int $id): Event
    {
        $this->id = $id;
        return $this;
    }

    public function setName(string $name): Event
    {
        $this->name = $name;
        return $this;
    }

    public function setDescription(string $description): Event
    {
        $this->description = $description;
        return $this;
    }

    public function setStart(\DateTime $start): Event
    {
        $this->start = $start->format('Y-m-d H:i:s');
        return $this;
    }

    public function setEnd(\DateTime $end): Event
    {
        $this->end = $end->format('Y-m-d H:i:s');
        return $this;
    }

    public function setId_user(int $id_user): Event
    {
        $this->id_user = $id_user;
        return $this;
    }

    public function setId_spa(int $id_spa): Event
    {
        $this->id_spa = $id_spa;
        return $this;
    }

    public function getDuration(): \DateInterval
    {
        return $this->getStart()->diff($this->getEnd());
    }

    public function getDurationInMinutes(): int
    {
        return $this->getDuration()->i;
    }

    public function getDurationInHours(): int
    {
        return $this->getDuration()->h;
    }


}
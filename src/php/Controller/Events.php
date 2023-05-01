<?php

namespace Controller;

use Entity\dbconnect;

require_once path_php . '/Entity/dbconnect.php';

class Events
{

    public function __construct()
    {
        $db = new dbconnect();
        $this->db = $db->getConnection();
    }
    public function getEventsBetween(\DateTime $start, \DateTime $end): array
    {
        $sql = "SELECT * FROM events WHERE start BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}' ORDER BY start ASC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $results = $stmt->fetchAll();
        return $results;
    }

    public function getEventsBetweenByDay(\DateTime $start, \DateTime $end): array
    {
        $events = $this->getEventsBetween($start, $end);
        $days = [];
        foreach ($events as $event) {
            $date = explode(' ', $event['start'])[0];
            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }

    public function getEvent(int $id): \Entity\Event
    {
        require_once path_php . '/Entity/Event.php';
        $sql = "SELECT * FROM events WHERE id = $id LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, \Entity\Event::class);
        $stmt->execute() or die(print_r($stmt->errorInfo(), true));
        $result = $stmt->fetch();
        if ($result === false){
            throw new \Exception('Aucun résultat n\'a été trouvé');
        }
        return $result;
    }
}
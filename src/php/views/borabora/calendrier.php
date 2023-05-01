<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Calendrier - Le Bora-Bora</title>
    <?php include_once path_php . 'include/head.php' ?>
</head>

<body>
<?php include_once path_php . 'include/navbar.php' ?>


<?php
require_once path_php . 'Controller/CalendarController.php';
require_once path_php . 'Controller/Events.php';

use Controller\CalendarController;
use Controller\Events;

$events = new Events();
$month = new CalendarController($_GET['month'] ?? null, $_GET['year'] ?? null);
$start = $month->getStartingDay();
$weeks = $month->getWeeks();
$end = (clone $start)->modify('+' . (6 + 7 * ($weeks - 1)) . ' days');
$events = $events->getEventsBetweenByDay($start, $end);
$start = $start->format('N') === '1' ? $start : $month->getStartingDay()->modify('last monday');
$today = $month->getToDay();

?>
<div class="div">
    <h1 style="font-size: 1.8em;"><?= $month->toString(); ?></h1>
    <div class="button_group_center">
        <a href="/calendrier?month=<?= $month->previousMonth()->month; ?>&year=<?= $month->previousMonth()->year; ?>"
           class="btn">&lt;</a>
        <a href="/calendrier?month=<?= $month->nextMonth()->month; ?>&year=<?= $month->nextMonth()->year; ?>"
           class="btn">&gt;</a>
    </div>
</div>


<table class="calendar__table calendar__table--<?= $weeks; ?>weeks">
    <?php for ($i = 0; $i < $weeks; $i++): ?>
        <tr>
            <?php foreach ($month->days as $k => $day):
                $date = (clone $start)->modify("+" . ($k + $i * 7) . " days");
                $eventsForDay = $events[$date->format('Y-m-d')] ?? [];
                ?>
                <td class="<?= $month->withinMonth($date) ? "" : "calendar__othermonfs"; ?> ">
                    <?php if ($i == 0): ?>
                        <div class="calendar__weekday"><?= $day; ?></div>
                    <?php endif; ?>
                    <div class="calendar__day <?= $date->format('Y-m-d') == $today->format('Y-m-d') ? "calendar__flag" : ""; ?>"><?= $date->format('d'); ?></div>
                    <?php foreach ($eventsForDay as $event): ?>
                        <div class="calendar__event">
                            <?= (new DateTime($event['start']))->format('H:i') ?> - <a
                                    href="/evenement?id=<?= $event['id']; ?>"><?= h($event['name']); ?></a>
                        </div>
                    <?php endforeach; ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endfor; ?>
</table>
<?php include_once path_php . 'include/footer.php' ?>
</body>
</html>
<?php

require 'TimeTravel.php';


$travel = new TimeTravel('1985-12-31',1000000000);
$diff = $travel->getTravelInfo();

echo "Il y a ". $diff->y ." années, ".$diff->m." mois, ".$diff->d." jours, ".$diff->h." heures, ".$diff->i." minutes et ".$diff->s." secondes entre les deux dates";

$end = $travel->findDate($travel->getTravelInfo());
echo date_format($end,'M d Y A h:i');

$interval = DateInterval::createFromDateString('1 month 1 week 1 day');
$period = new DatePeriod($travel->getEnd(), $interval, $travel->getStart());
$caseTravels = $travel->backToFutureStepByStep($period);
//var_dump($caseTravels);
foreach ($caseTravels as $key => $value);
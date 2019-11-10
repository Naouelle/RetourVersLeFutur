<?php

require 'TimeTravel.php';


$timeTravel = new TimeTravel(new DateTime('1985-12-31'), new DateTime());

echo $timeTravel->getTravelInfo();
echo '<br>';
echo $timeTravel->findDate(new DateInterval('PT1000000000S'));
echo '<br>';
$dates = $timeTravel->backToFutureStepByStep(new DateInterval('P1M8D'));

/** @var DateTime $date */
foreach ($dates as $date) {
    echo $date->format('d/m/Y H:i:s') .'<br>';
}


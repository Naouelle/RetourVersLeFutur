<?php

class TimeTravel
{
    /*
     *  @var DateTime
     */
    private $start;
    /*
     *  @var DateTime
     */
    private $end;

    public function __construct($start, $end)
    {
        $this->setStart($start);
        $this->setEnd($end);
    }

    public function getTravelInfo()
    {
        $diff = $this->start->diff( $this->end);
        return $diff;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setStart($start)
    {
        $this->start = new DateTime($start);
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function setEnd($end)
    {
        $this->end = clone $this->start;
        $this->end->modify("- ".$end." seconds");
    }

    public function findDate(DateInterval $interval)
    {
        $arrivalDate = clone $this->start;
        $arrivalDate = $arrivalDate->add($interval) ;
        return $arrivalDate;
    }

    public function backToFutureStepByStep(DatePeriod $step)
    {
        $period =[];
        foreach ($step as $date) {
            array_push($period, $date->format('M d Y A h:i'));
        }
        return $period;
    }
}
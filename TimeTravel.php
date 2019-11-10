<?php

class TimeTravel
{

    /**
     * @param DateTime
     */
    private $start;

    /**
     * @param DateTime
     */
    private $end;

    /**
     * TimeTravel constructor.
     * @param DateTime $start
     * @param DateTime $end
     */
    public function __construct(DateTime $start, DateTime $end)
    {
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @return string
     */
    public function getTravelInfo()
    {
        return $this->start->diff($this->end)->format('Il y a %y années, %m mois, %d jours, %H heures, %i minutes et %s secondes entre les deux dates');
    }

    public function findDate(DateInterval $interval)
    {
        return $this->start->sub($interval)->format('d/m/Y');
    }


    public function backToFutureStepByStep(DateInterval $step)
    {
        return new DatePeriod($this->start, $step, $this->end);
    }

    /**
     * @return DateTime
     */
    public function getStart(): DateTime
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     * @return $this
     */
    public function setStart(DateTime $start): TimeTravel
    {
        $this->start = $start;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * @param DateTime $end
     * @return $this
     */
    public function setEnd(DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

}
































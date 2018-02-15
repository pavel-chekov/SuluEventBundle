<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * PlanItem
 */
class PlanItem
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Collection|EventDateReservation[]
     */
    private $eventDateReservations;

    /**
     * @var Plan
     */
    private $plan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventDateReservations = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PlanItem
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return PlanItem
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     *
     * @return PlanItem
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return PlanItem
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add eventDateReservation
     *
     * @param EventDateReservation $eventDateReservation
     *
     * @return PlanItem
     */
    public function addEventDateReservation(EventDateReservation $eventDateReservation)
    {
        $this->eventDateReservations[] = $eventDateReservation;

        return $this;
    }

    /**
     * Remove eventDateReservation
     *
     * @param EventDateReservation $eventDateReservation
     */
    public function removeEventDateReservation(EventDateReservation $eventDateReservation)
    {
        $this->eventDateReservations->removeElement($eventDateReservation);
    }

    /**
     * Get eventDateReservations
     *
     * @return Collection|EventDateReservation[]
     */
    public function getEventDateReservations()
    {
        return $this->eventDateReservations;
    }

    /**
     * Set plan
     *
     * @param Plan $plan
     *
     * @return PlanItem
     */
    public function setPlan(Plan $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }
}

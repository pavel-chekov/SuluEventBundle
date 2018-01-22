<?php

namespace Chekov\Bundle\EventBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $eventDateReservations;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\Plan
     */
    private $plan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventDateReservations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateReserveration $eventDateReservation
     *
     * @return PlanItem
     */
    public function addEventDateReservation(\Chekov\Bundle\EventBundle\Entity\EventDateReserveration $eventDateReservation)
    {
        $this->eventDateReservations[] = $eventDateReservation;

        return $this;
    }

    /**
     * Remove eventDateReservation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateReserveration $eventDateReservation
     */
    public function removeEventDateReservation(\Chekov\Bundle\EventBundle\Entity\EventDateReserveration $eventDateReservation)
    {
        $this->eventDateReservations->removeElement($eventDateReservation);
    }

    /**
     * Get eventDateReservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEventDateReservations()
    {
        return $this->eventDateReservations;
    }

    /**
     * Set plan
     *
     * @param \Chekov\Bundle\EventBundle\Entity\Plan $plan
     *
     * @return PlanItem
     */
    public function setPlan(\Chekov\Bundle\EventBundle\Entity\Plan $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \Chekov\Bundle\EventBundle\Entity\Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }
}


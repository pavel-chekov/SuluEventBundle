<?php

/*
 * This file is part of ChekovEventBundle package.
 *
 * (c) Chekov Bundles <https://github.com/pavel-chekov>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class PlanItem implements PlanItemInterface
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
     * @var Collection|EventDateReservationInterface[]
     */
    private $eventDateReservations;

    /**
     * @var PlanInterface
     */
    private $plan;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eventDateReservations = new ArrayCollection();
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function addEventDateReservation(EventDateReservationInterface $eventDateReservation)
    {
        $this->eventDateReservations[] = $eventDateReservation;

        return $this;
    }

    public function removeEventDateReservation(EventDateReservationInterface $eventDateReservation)
    {
        $this->eventDateReservations->removeElement($eventDateReservation);

        return $this;
    }

    public function getEventDateReservations()
    {
        return $this->eventDateReservations;
    }

    public function setPlan(PlanInterface $plan)
    {
        $this->plan = $plan;

        return $this;
    }

    public function getPlan()
    {
        return $this->plan;
    }
}

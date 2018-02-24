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

use Chekov\Bundle\ExtensionBundle\Entity\TranslationableTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class EventDate implements EventDateInterface
{
    use TranslationableTrait;

    /**
     * @var \DateTime
     */
    private $start;

    /**
     * @var \DateTime
     */
    private $end;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var Collection|EventDateMemberInterface[]
     */
    private $members;

    /**
     * @var Collection|EventDateReservationInterface[]
     */
    private $reservations;

    /**
     * @var PlanInterface
     */
    private $plan;

    /**
     * @var EventInterface
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new ArrayCollection();
        $this->members = new ArrayCollection();
        $this->reservations = new ArrayCollection();
    }

    public function setStart(\DateTime $start = null)
    {
        $this->start = $start;

        return $this;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function setEnd(\DateTime $end = null)
    {
        $this->end = $end;

        return $this;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function getId()
    {
        return $this->id;
    }

    public function addMember(EventDateMemberInterface $member)
    {
        $this->members[] = $member;

        return $this;
    }

    public function removeMember(EventDateMemberInterface $member)
    {
        $this->members->removeElement($member);

        return $this;
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function addReservation(EventDateReservationInterface $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    public function removeReservation(EventDateReservationInterface $reservation)
    {
        $this->reservations->removeElement($reservation);

        return $this;
    }

    public function getReservations()
    {
        return $this->reservations;
    }

    public function setPlan(PlanInterface $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }

    public function getPlan()
    {
        return $this->plan;
    }

    public function setEvent(EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    public function getEvent()
    {
        return $this->event;
    }
}

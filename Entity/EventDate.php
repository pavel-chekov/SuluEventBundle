<?php

namespace Chekov\Bundle\EventBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * EventDate
 */
class EventDate
{
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
     * @var Collection|EventDateTranslation[]
     */
    private $translations;

    /**
     * @var Collection|EventDateMember[]
     */
    private $members;

    /**
     * @var Collection|EventDateReservation[]
     */
    private $reservations;

    /**
     * @var Plan
     */
    private $plan;

    /**
     * @var Event
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

    /**
     * Set start
     *
     * @param \DateTime $start
     *
     * @return EventDate
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     *
     * @return EventDate
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
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
     * Add translation
     *
     * @param EventDateTranslation $translation
     *
     * @return EventDate
     */
    public function addTranslation(EventDateTranslation $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param EventDateTranslation $translation
     */
    public function removeTranslation(EventDateTranslation $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return Collection|EventDateTranslation[]
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Add member
     *
     * @param EventDateMember $member
     *
     * @return EventDate
     */
    public function addMember(EventDateMember $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param EventDateMember $member
     */
    public function removeMember(EventDateMember $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return Collection|EventDateMember[]
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add reservation
     *
     * @param EventDateReservation $reservation
     *
     * @return EventDate
     */
    public function addReservation(EventDateReservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param EventDateReservation $reservation
     */
    public function removeReservation(EventDateReservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return Collection|EventDateReservation[]
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set plan
     *
     * @param Plan $plan
     *
     * @return EventDate
     */
    public function setPlan(Plan $plan = null)
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

    /**
     * Set event
     *
     * @param Event $event
     *
     * @return EventDate
     */
    public function setEvent(Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return Event
     */
    public function getEvent()
    {
        return $this->event;
    }
}

<?php

namespace Chekov\Bundle\EventBundle\Entity;

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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $translations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $members;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $reservations;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\Plan
     */
    private $plan;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\Event
     */
    private $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->translations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->members = new \Doctrine\Common\Collections\ArrayCollection();
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateTranslations $translation
     *
     * @return EventDate
     */
    public function addTranslation(\Chekov\Bundle\EventBundle\Entity\EventDateTranslations $translation)
    {
        $this->translations[] = $translation;

        return $this;
    }

    /**
     * Remove translation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateTranslations $translation
     */
    public function removeTranslation(\Chekov\Bundle\EventBundle\Entity\EventDateTranslations $translation)
    {
        $this->translations->removeElement($translation);
    }

    /**
     * Get translations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Add member
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateMember $member
     *
     * @return EventDate
     */
    public function addMember(\Chekov\Bundle\EventBundle\Entity\EventDateMember $member)
    {
        $this->members[] = $member;

        return $this;
    }

    /**
     * Remove member
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateMember $member
     */
    public function removeMember(\Chekov\Bundle\EventBundle\Entity\EventDateMember $member)
    {
        $this->members->removeElement($member);
    }

    /**
     * Get members
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Add reservation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateReseveration $reservation
     *
     * @return EventDate
     */
    public function addReservation(\Chekov\Bundle\EventBundle\Entity\EventDateReseveration $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateReseveration $reservation
     */
    public function removeReservation(\Chekov\Bundle\EventBundle\Entity\EventDateReseveration $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Set plan
     *
     * @param \Chekov\Bundle\EventBundle\Entity\Plan $plan
     *
     * @return EventDate
     */
    public function setPlan(\Chekov\Bundle\EventBundle\Entity\Plan $plan = null)
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

    /**
     * Set event
     *
     * @param \Chekov\Bundle\EventBundle\Entity\Event $event
     *
     * @return EventDate
     */
    public function setEvent(\Chekov\Bundle\EventBundle\Entity\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Chekov\Bundle\EventBundle\Entity\Event
     */
    public function getEvent()
    {
        return $this->event;
    }
}


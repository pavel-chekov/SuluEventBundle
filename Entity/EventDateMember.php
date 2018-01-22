<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventDateMember
 */
class EventDateMember
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $paid;

    /**
     * @var bool
     */
    private $participate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     *
     * @return EventDateMember
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set participate
     *
     * @param boolean $participate
     *
     * @return EventDateMember
     */
    public function setParticipate($participate)
    {
        $this->participate = $participate;

        return $this;
    }

    /**
     * Get participate
     *
     * @return bool
     */
    public function getParticipate()
    {
        return $this->participate;
    }
}


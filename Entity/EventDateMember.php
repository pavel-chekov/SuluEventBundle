<?php

namespace Chekov\Bundle\EventBundle\Entity;

/**
 * EventDateMember
 */
class EventDateMember
{
    /**
     * @var boolean
     */
    private $paid;

    /**
     * @var boolean
     */
    private $participate;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\EventDateReservation
     */
    private $reservation;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    private $date;

    /**
     * @var \Chekov\Bundle\EventBundle\Entity\EventPrice
     */
    private $price;

    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\Contact
     */
    private $contact;

    /**
     * @var \Sulu\Bundle\ContactBundle\Entity\Account
     */
    private $account;


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
     * @return boolean
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
     * @return boolean
     */
    public function getParticipate()
    {
        return $this->participate;
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
     * Set reservation
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDateReservation $reservation
     *
     * @return EventDateMember
     */
    public function setReservation(\Chekov\Bundle\EventBundle\Entity\EventDateReservation $reservation = null)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventDateReservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set date
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventDate $date
     *
     * @return EventDateMember
     */
    public function setDate(\Chekov\Bundle\EventBundle\Entity\EventDate $date = null)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set price
     *
     * @param \Chekov\Bundle\EventBundle\Entity\EventPrice $price
     *
     * @return EventDateMember
     */
    public function setPrice(\Chekov\Bundle\EventBundle\Entity\EventPrice $price = null)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return \Chekov\Bundle\EventBundle\Entity\EventPrice
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set contact
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\Contact $contact
     *
     * @return EventDateMember
     */
    public function setContact(\Sulu\Bundle\ContactBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set account
     *
     * @param \Sulu\Bundle\ContactBundle\Entity\Account $account
     *
     * @return EventDateMember
     */
    public function setAccount(\Sulu\Bundle\ContactBundle\Entity\Account $account = null)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Get account
     *
     * @return \Sulu\Bundle\ContactBundle\Entity\Account
     */
    public function getAccount()
    {
        return $this->account;
    }
}

